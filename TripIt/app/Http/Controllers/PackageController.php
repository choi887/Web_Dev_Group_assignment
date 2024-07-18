<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Order;
use App\Models\Package;
use Illuminate\Http\Request;
use App\Models\PackageEventsList;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class PackageController extends Controller

{
    public function getEventWithName(String $eventName)
    {
        $event = DB::table('events')->where('name', '=', $eventName)
            ->first();
        return $event ? $event : null; //if null return empty
    }

    public function store(Request $request)
    {
        try {
            $data = $request->validate([ // from the form submission first
                'name' => 'required|string|max:255',
                'price' => 'required|numeric|min:0',
                'description' => 'required|string|max:3000',
                'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:8000|dimensions:min_width=800,min_height=600',
                'selected_events' => 'required|string',
            ]);


            $selectedEvents = $request->input('selected_events');
            $selectedEvents = json_decode($selectedEvents, true); // decode first
            unset($data['selected_events']);
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

            foreach ($selectedEvents as $eventDetails) {
                $name = $eventDetails['name'];
                $eventDetails = PackageController::getEventWithName($name);
                $startDates[] = $eventDetails->start_date;
                $endDates[]  = $eventDetails->end_date;
            } //getting arrays first
            sort($startDates);
            sort($endDates);
            $data['start_date'] = $startDates[0];
            $data['end_date'] = end($endDates);
            $package = Package::create($data);

            foreach ($selectedEvents as $eventName) {
                $name = $eventName['name'];
                $event = PackageController::getEventWithName($name);
                $eventListData = [
                    'event_id' => $event->id,
                    'package_id' => $package->id,
                ];
                PackageEventsList::create($eventListData);
            } //create the package event list records
            return redirect()->back()->with('success', "{$data['name']} created successfully");
        } //try end
        catch (Exception $e) {
            Log::error("Error storing event: " . $e->getMessage());
            return redirect()->back()->with('fail', "{$e->getMessage()}");
        }
    }

    public function showAdminPackageList(Request $request)
    {
        $packages = $this->getAllPackages();

        foreach ($packages as $package) {
            if ($package->is_active == '1') {
                $package->is_active = 'Active';
                $package->active_color = 'text-green-600';
            } elseif ($package->is_active == '0') {
                $package->is_active = 'Inactive';
                $package->active_color = 'text-red-600';
            }
        }

        return view('package-admin-list', [
            'packages' => $packages,
        ]);
    }

    public function showPackageList(Request $request)
    {
        $packages = $this->getAllPackages();
        return view('package-list', [
            'packages' => $packages,
        ]);
    }

    public function showPackage(Request $request)
    {
        $result = $this->getSpecificPackage($request->package_id);

        if (is_array($result) && isset($result['package'])) {
            return view('package-specific', [
                'package' => $result['package'],
                'events' => $result['events'],
                'similarPackages' => $result['similarPackages'],
            ]);
        } else {
            return $result; // Return the error response if fetching failed
        }
    }


    public function getAllPackages()
    {
        try {
            $packages = Package::paginate(10); // Use paginate instead of get

            return $packages;
        } catch (Exception $e) {
            Log::error("Error fetching packages: " . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => "Error fetching packages: " . $e->getMessage()
            ], 500);
        }
    }

    public function getSpecificPackage($packageId)
    {
        try {
            if (!$packageId) {
                Log::error("Error fetching package: No Available Package ID");
                return response()->json([
                    'success' => false,
                    'message' => "Error fetching package: No Available Package ID"
                ], 400);
            }

            $package = Package::find($packageId);

            if (!$package) {
                Log::error("Error fetching package: Package not found");
                return response()->json([
                    'success' => false,
                    'message' => "Error fetching package: Package not found"
                ], 404);
            }

            $events = $package->events()->with(['category', 'gallery'])->inRandomOrder()->get();

            $similarPackages = Package::where('id', '!=', $packageId)
                ->inRandomOrder()
                ->take(3)
                ->get();

            return [
                'success' => true,
                'package' => $package,
                'events' => $events,
                'similarPackages' => $similarPackages
            ];
        } catch (Exception $e) {
            Log::error("Error fetching package: " . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => "Error fetching package: " . $e->getMessage()
            ], 500);
        }
    }

    public function joinPackage(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'package_id' => 'required|integer',
                'user_id' => 'required|integer',
                'number_pax' => 'required|min:1|max:10'
            ]);

            if ($validator->fails()) {
                throw new Exception($validator->errors()->first());
            }

            $orderInputData = [
                'item_id' => $request->package_id,
                'user_id' => $request->user_id,
                'number_pax' => $request->number_pax,
                'order_date' => now(),
                'type' => 'package',
            ];

            // Create the order
            $order = Order::create($orderInputData);

            // Log the created order
            Log::info("Order created: ", $order->toArray());

            return redirect()->back()->with('success', 'Package joined successfully!');
        } catch (Exception $e) {
            Log::error("Error joining package: " . $e->getMessage());

            return redirect()->back()->with('error', 'Error joining package: ' . $e->getMessage());
        }
    }
}
