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
    public function showAdminOrderList(Request $request)
    {
        $orders = $this->getOrders($request);

        return view('order-admin-list', [
            'orders' => $orders,
        ]);
    }
    public function showOrderList(Request $request)
    {
        $orders = Order::query()->orderBy('created_at', 'desc')->take(8)->get();

        return view('dashboard', compact('orders'));
    }
    public function showOrderPage(Request $request)
    {
        $user_id = Auth::user()->id;
        $orders = $this->getOrders($request, $user_id);

        return view('order-list', [
            'orders' => $orders,
        ]);
    }
    public function getOrders(Request $request, $userId = null)
    {
        try {
            $filters = [
                'status' => $request->status,
                'type' => $request->type,
            ];

            $query = Order::query()
                ->with(['item', 'user'])
                ->applyFilters($filters)
                ->orderBy('created_at', 'desc');

            if ($userId) {
                $query->where('user_id', $userId);
            }

            $orders = $query->paginate(10);

            return $this->orderColor($orders);
        } catch (Exception $e) {
            Log::error("Error fetching orders: " . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => "Error fetching orders: " . $e->getMessage()
            ], 500);
        }
    }

    public function orderColor($orders)
    {
        foreach ($orders as $order) {
            $status = $order->status->value;
            if ($status === 'ongoing') {
                $order->bg_color_1 = 'bg-green-200';
                $order->bg_color_2 = 'bg-green-500';
                $order->text_color = 'text-green-700';
            } elseif ($status === 'cancelled') {
                $order->bg_color_1 = 'bg-red-200';
                $order->bg_color_2 = 'bg-red-500';
                $order->text_color = 'text-red-800';
            } else {
                $order->bg_color_1 = 'bg-blue-200';
                $order->bg_color_2 = 'bg-blue-500';
                $order->text_color = 'text-blue-800';
            }
        }
        return $orders;
    }
}
