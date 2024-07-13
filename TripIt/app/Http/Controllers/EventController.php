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
                    // You can save the path to the database or perform other actions
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
}
