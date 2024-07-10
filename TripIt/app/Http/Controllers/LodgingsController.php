<?php

namespace App\Http\Controllers;

use App\Models\Lodging;
use Exception;
use Illuminate\Http\Request;

class LodgingsController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'state' => 'required|string|max:50',
            'city' => 'required|string|max:50',
            'zip_code' => 'required|string|max:50',
            'phone_number' => 'nullable|string|max:255',
            'email' => 'required|string|max:50',
            'description' => 'required|string|max:5000',
        ]);
        try {
            Lodging::create($data);
            return redirect()->back()->with('success', "{$data['name']} created successfully");
        } catch (Exception $e) {
            return redirect()->back()->with('fail', "{$e->getMessage()}");
        }
    }
    public function search(Request $request)
    {
        $query = $request->input('query');

        $categories = Lodging::where('name', 'LIKE', "%{$query}%")
            ->limit(10)
            ->get(['id', 'name']);

        return response()->json($categories);
    }
}
