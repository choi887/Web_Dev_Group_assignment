<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\PackageEventsList;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

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
                'description' => 'required|string|max:5000',
                'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'selected_events' => 'required|string',
            ]);


            $selectedEvents = $request->input('selected_events');
            $selectedEvents = json_decode($selectedEvents, true); // decode first
            unset($data['selected_events']);
            if ($request->hasFile('cover_image')) {
                $file = $request->file('cover_image');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('event_images', $fileName, 'public');
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
}
