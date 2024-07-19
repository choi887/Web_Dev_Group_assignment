<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use App\Type;

class OrderController extends Controller
{
    public function showOrderList(Request $request)
    {
        $orders = Order::query()->orderBy('created_at', 'desc')->take(8)->get();

        return view('dashboard', compact('orders'));
    }
}
