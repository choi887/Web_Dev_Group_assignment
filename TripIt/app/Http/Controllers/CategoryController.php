<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'name' => 'required|string|max:255',
            ]);


            Category::create($data);
            return redirect()->back()->with('success', "{$data['name']} created successfully");
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->with('fail', "{$data['name']} already exists.");
        }
    }
    public function search(Request $request)
    {
        $query = $request->input('query');

        $categories = Category::where('name', 'LIKE', "%{$query}%")
            ->limit(10)
            ->get(['id', 'name']);

        return response()->json($categories);
    }
    public function firstFive(Request $request)
    {
        $categories = Category::all()->take(5);
        return response()->json($categories);
    }
}
