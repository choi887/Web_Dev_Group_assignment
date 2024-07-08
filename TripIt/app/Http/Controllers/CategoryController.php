<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        try {
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
}
