<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class WelcomeController extends Controller
{
    public function showWelcome(Request $request)
    {
        $packages = Package::inRandomOrder()->take(3)->get();
        $events = Event::query()->orderBy('created_at', 'desc')->take(3)->get();
        return view('welcome', [
            'events' => $events,
            'packages' => $packages,
        ]);
    }
}
