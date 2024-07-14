<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\Gallery;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


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
                'start_date' => 'required|date',
                'end_date' => 'required|date',
                'food' => 'boolean',
                'transportation' => 'boolean',
                'lodging' => 'boolean',
                'description' => 'required|string|max:5000',
                'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'multiple_file_upload.*' => 'image|mimes:jpeg,png,jpg,gif|max:10240', // 10MB max size for each file
            ]);
            $data['created_by'] =  $request->user()->name;
            if ($request->hasFile('cover_image')) {
                $file = $request->file('cover_image');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('event_images', $fileName, 'public');
                $data['cover_image_path'] = $filePath;
                unset($data['cover_image']);
            }
            $createdEvent =  Event::create($data);
            $eventId = $createdEvent->id;
            if ($request->hasFile('multiple_file_upload')) {
                $multipleFiles = $request->file('multiple_file_upload');
                foreach ($multipleFiles as $file) {
                    $multipleFileName = time() . '_' . $file->getClientOriginalName();
                    $path = $file->storeAs('event_images', $multipleFileName, 'public'); // Example storage path
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
            return redirect()->back()->with('fail', "{$e->getMessage()}");
        }
    }

    public function showEventList(Request $request)
    {
        $events = $this->getAllEvents();
        return view('event-list', [
            'events' => $events,
        ]);
    }

    public function showEvent(Request $request)
    {
        $result = $this->getSpecificEvent($request->event_id);

        if (is_array($result) && isset($result['event'])) {
            return view('event-specific', [
                'event' => $result['event'],
                'similarEvents' => $result['similarEvents'],
            ]);
        } else {
            return $result; // Return the error response if fetching failed
        }
    }


    public function getAllEvents($categoryId = null)
    {
        try {
            if ($categoryId) {
                $events = Event::where('category_id', $categoryId)
                    ->with('category')
                    ->get();
            } else {
                $events = Event::with('category')
                    ->get();
            }

            return $events;
        } catch (Exception $e) {
            Log::error("Error fetching events: " . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => "Error fetching events: " . $e->getMessage()
            ], 500);
        }
    }

    public function getSpecificEvent($eventId)
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
                ->take(3)
                ->get();

            return [
                'event' => $event,
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
}
