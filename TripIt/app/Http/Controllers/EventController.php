<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'food' => 'boolean',
            'category_id' => 'required|exists:categories,id',
        ]);
        Event::create($data);
        return redirect()->route('dashboard');
    }
}
