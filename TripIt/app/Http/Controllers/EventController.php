<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class EventController extends Controller
{
    public function getCategoryIdWithName(String $tableName, String $tableColumn,  String $categoryName)
    {
        $category = DB::table($tableName)->where($tableColumn, $categoryName)
            ->first();
        return $category->id ? $category->id : null; //if null return empty
    }

    public function store(Request $request)
    {

        try {
            $data = $request->validate([
                'name' => 'required|string|max:255',
                'phone_number' => 'nullable|string|max:50',
                'price' => 'required|numeric|min:0',
                'category' => 'required|exists:categories,name',
                'transportation' => 'required|exists:transportations,company',
                'lodging' => 'required|exists:lodgings,name',
                'food' => 'boolean',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'description' => 'required|string|max:5000',

            ]);

            $data['category_id'] = $this->getCategoryIdWithName("categories", "name", $data['category']);
            unset($data['category']);

            $data['transportation_id'] = $this->getCategoryIdWithName("transportations", "company", $data['transportation']);
            unset($data['transportation']);

            $data['lodging_id'] = $this->getCategoryIdWithName("lodgings", "name", $data['lodging']);
            unset($data['lodging']);

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('event_images', $filename, 'public');
                $data['image_path'] = $filePath;
            }
            Event::create($data);
            return redirect()->back()->with('success', "{$data['name']} created successfully");
        } //try end
        catch (Exception $e) {
            Log::error("Error storing event: " . $e->getMessage());
            return redirect()->back()->with('fail', "{$e->getMessage()}");
        }
    }
}
