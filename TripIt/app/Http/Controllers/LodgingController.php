<?php

namespace App\Http\Controllers;

use App\Models\Lodging;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class LodgingController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'Lodging' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'state' => 'required|string|max:50',
            'city' => 'required|string|max:50',
            'phone_number' => 'nullable|string|max:255',
            'email' => 'required|string|max:50',
            'description' => 'required|string|max:255',
        ]);
        dd($request);
        try {
            Lodging::create($data);
            return redirect()->back()->with('success', "{$data['lodging']} created successfully");
        } catch (QueryException $e) {
            return redirect()->back()->with('fail', "{$e->getMessage()}");
        }
    }
}
