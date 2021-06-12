<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use App\Product;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getOrderStatistiques()
    {
        $orders = Order::count();
        $orders_waiting = Order::where('status', "0")->count();
        $orders_delivring = Order::where('status', "1")->count();
        $orders_delivred = Order::where('status', "2")->count();

        return response()->json([
            'order_notify' => $orders,
            'order_wating_notify' => $orders_waiting,
            'order_wating_delivring' => $orders_delivring,
            'order_wating_delivred' => $orders_delivred
        ]);
    }

    public function widgetNotifications()
    {
        $productCounts = Product::where('status', 1)
                                ->count();

        $stock_epuise = Product::where("quantity", '<=', 'stock')->count();

        $users = User::count();

        return response()->json([
            'users_stats' => $users,
            'stock_epuise' => $stock_epuise,
            'product_stat' => $productCounts,
        ]);
    }

    public function getLatestOrders()
    {
        $orders = Order::where('status', "0")
            ->withCount('products')
            ->orderBy('created_at', 'desc')
            ->limit(10)
            ->get();

        return response()->json($orders);
    }
}
