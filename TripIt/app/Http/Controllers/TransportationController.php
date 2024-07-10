<?php

namespace App\Http\Controllers;

use App\Models\Transportation;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class TransportationController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'company' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'phone_number' => 'nullable|string|max:20',
            'date' => 'nullable|date',
        ]);

        try {
            Transportation::create($data);
            return redirect()->back()->with('success', "{$data['company']} created successfully");
        } catch (Exception $e) {

            return redirect()->back()->with('fail', "{$e->getMessage()}");
        }
    }
    public function search(Request $request)
    {
        $query = $request->input('query');

        $categories = Transportation::where('company', 'LIKE', "%{$query}%")
            ->limit(10)
            ->get(['id', 'company']);

        return response()->json($categories);
    }
}
