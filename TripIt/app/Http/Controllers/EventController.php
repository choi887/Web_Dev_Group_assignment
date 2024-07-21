<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Event;
use App\Models\Order;
use App\Models\Gallery;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Drivers\Gd\Driver;



class EventController extends Controller
{
    // public function getCategoryIdWithName(String $tableName, String $tableColumn,  String $categoryName)
    // {
    //     $category = DB::table('events')->where($, $categoryName)
    //         ->first();
    //     return $category->id ? $category->id : null; //if null return empty
    // }

    public function store(Request $request)
    {

        try {

            $data = $request->validate([ // from the form submission first
                'name' => 'required|string|max:255',
                'phone_number' => 'nullable|string|max:50',
                'price' => 'required|numeric|min:0',
                'category_id' => 'required|exists:categories,id',
                'address' => 'required|string|max:255',
                'start_date' => 'required|date',
                'end_date' => 'required|date',
                'food' => 'boolean',
                'transportation' => 'boolean',
                'lodging' => 'boolean',
                'description' => 'required|string|max:3000',
                'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5000|dimensions:min_width=700,min_height=500',
                'multiple_file_upload.*' => 'image|mimes:jpeg,png,jpg,gif|max:10240|dimensions:min_width=700,min_height=500', // 10MB max size for each file
            ]);
            $data['created_by'] =  $request->user()->name;

            if ($request->hasFile('cover_image')) {
                $file = $request->file('cover_image');
                $fileName = time() . '_' . $file->getClientOriginalName();

                // Create an instance of ImageManager
                $manager = new ImageManager(new Driver());

                //then Read the image to change it
                $image = $manager->read($file);

                // Resize the image to avoid dif size
                $image->resize(1200, 900);

                // Generate the file path
                $filePath = 'event_images/' . $fileName;

                // Save the resized image to the storage
                Storage::disk('public')->put($filePath, $image->encode());

                $data['cover_image_path'] = $filePath;
                unset($data['cover_image']);
            }
            $createdEvent =  Event::create($data);
            $eventId = $createdEvent->id;
            if ($request->hasFile('multiple_file_upload')) {
                $multipleFiles = $request->file('multiple_file_upload');
                foreach ($multipleFiles as $file) {
                    $multipleFileName = time() . '_' . $file->getClientOriginalName();

                    // Create an instance of ImageManager
                    $manager = new ImageManager(new Driver());

                    // Read the image (use $file, not $multipleFiles)
                    $image = $manager->read($file);

                    // Resize the image
                    $image->resize(1200, 900);

                    // Generate the file path
                    $path = 'event_images/' . $multipleFileName;  // Use $multipleFileName, not $fileName

                    // Save the resized image to the storage
                    Storage::disk('public')->put($path, $image->encode());

                    $galleryInputData = [
                        'name' => $multipleFileName,
                        'image_path' => $path,
                        'event_id' => $eventId,
                    ];
                    Gallery::create($galleryInputData);
                }
            }
            return redirect()->back()->with('success', "{$data['name']} created successfully");
        } //try end
        catch (Exception $e) {
            Log::error("Error storing event: " . $e->getMessage());
            return redirect()->back()->with('fail', "{$e->getMessage()}")->withInput();
        }
    }

    public function showAdminEventList(Request $request)
    {
        $events = $this->getAllEvents($request);
        return view('event-admin-list', [
            'events' => $events,
        ]);
    }

    public function showEventList(Request $request)
    {
        $events = $this->getAllEvents($request);

        if ($request->ajax()) {
            return view('components.event-list', [
                'events' => $events,
            ])->render();
        }

        return view('event-list', [
            'events' => $events,
        ]);
    }

    public function showEvent(Request $request)
    {
        $result = $this->getSpecificEvent($request->event_id, Auth::id(), 'event');

        if (is_array($result) && isset($result['event'])) {
            return view('event-specific', [
                'event' => $result['event'],
                'orders' => $result['orders'],
                'similarEvents' => $result['similarEvents'],
            ]);
        } else {
            return $result; // Return the error response if fetching failed
        }
    }


    public function getAllEvents(Request $request)
    {
        try {
            $filters = [
                'date_range' => [
                    'start' => $request->start_date,
                    'end' => $request->end_date,
                ],
                'price' => $request->price,
                'categories' => $request->categories,
                'logistics' => [
                    'food' => $request->food,
                    'transportation' => $request->transportation,
                    'lodging' => $request->lodging,
                ],
            ];

            $events = Event::with('category')
                ->applyFilters($filters)
                ->orderBy('created_at', 'desc')
                ->paginate(10);

            return $events;
        } catch (Exception $e) {
            Log::error("Error fetching events: " . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => "Error fetching events: " . $e->getMessage()
            ], 500);
        }
    }

    public function getSpecificEvent($eventId, $user_id, $type)
    {
        try {
            if (!$eventId) {
                Log::error("Error fetching events: No Available Event ID");
                return response()->json([
                    'success' => false,
                    'message' => "Error fetching events: No Available Event ID"
                ], 400);
            }

            $event = Event::where('id', $eventId)
                ->with(['category', 'gallery'])
                ->first();

            if (!$event) {
                Log::error("Error fetching events: Events not found");
                return response()->json([
                    'success' => false,
                    'message' => "Error fetching events: Events not found"
                ], 404);
            }

            // Fetch 3 similar events from the same category, excluding the current event
            $similarEvents = Event::where('category_id', $event->category_id)
                ->where('id', '!=', $eventId)
                ->with(['category', 'gallery'])
                ->inRandomOrder()
                ->take(3)
                ->get();
            $order = Order::query()->where('user_id', $user_id)->where('type', $type)->where('item_id', $eventId)->first();
            return [
                'event' => $event,
                'orders' => $order,
                'similarEvents' => $similarEvents,
            ];
        } catch (Exception $e) {
            Log::error("Error fetching events: " . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => "Error fetching events: " . $e->getMessage()
            ], 500);
        }
    }

    public function joinEvent(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'event_id' => 'required|integer',
                'user_id' => 'required|integer',
                'number_pax' => 'required|min:1|max:10',
            ]);

            if ($validator->fails()) {
                throw new Exception($validator->errors()->first());
            }

            $orderInputData = [
                'item_id' => $request->event_id,
                'user_id' => $request->user_id,
                'number_pax' => $request->number_pax,
                'type' => 'event',
                'order_date' => now(),

            ];
            Order::create($orderInputData);

            return redirect()->back()->with('success', 'Event joined successfully!');
        } catch (Exception $e) {
            Log::error("Error joining event: " . $e->getMessage());

            return redirect()->back()->with('error', 'Error joining event: ' . $e->getMessage());
        }
    }
}
