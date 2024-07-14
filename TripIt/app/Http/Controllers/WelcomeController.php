<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class WelcomeController extends Controller
{
    public function showWelcome(Request $request)
    {
        $events = Event::inRandomOrder()->take(3)->get();
        return view('welcome', [
            'events' => $events,
        ]);
    }
}
