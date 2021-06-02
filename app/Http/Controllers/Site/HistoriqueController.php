<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class HistoriqueController extends Controller
{
    public function index()
    {
        $user = \Auth::user();
        $orders = $user->orders;

        return view('site.pages.historique.index', compact('orders'));
    }

    public function show($order_id)
    {
        $order = Order::findOrFail($order_id);
        $order->load('products');

        return view('site.pages.historique.show', compact('order'));
    }

    public function bonCommande($order_id)
    {
        $order = Order::findOrFail($order_id);
        $order->load('products');

        return view('site.pages.historique.bon', compact('order'));
    }
}
