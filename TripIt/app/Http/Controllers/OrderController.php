<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use App\Type;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    public function showOrderList(Request $request)
    {
        $orders = Order::query()->orderBy('created_at', 'desc')->take(8)->get();

        return view('dashboard', compact('orders'));
    }
    public function showOrderPage(Request $request)
    {
        $orders = $this->getAllOrders($request);
        return view('order-list', compact('orders'));
    }
    public function getAllOrders(Request $request)
    {
        $user_id = Auth::user()->id;

        try {
            $filters = [
                'date_range' => [
                    'start' => $request->start_date,
                    'end' => $request->end_date,
                ],
                'price' => $request->price,
            ];
            $orders = Order::query()
                ->with(['event', 'package'])
                ->where('user_id', $user_id)
                ->orderBy('created_at', 'desc')
                ->paginate(10);

            return $orders;
        } catch (Exception $e) {
            Log::error("Error fetching packages: " . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => "Error fetching packages: " . $e->getMessage()
            ], 500);
        }
    }
}
