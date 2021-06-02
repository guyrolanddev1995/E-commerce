<?php

namespace App\Http\Livewire;

use App\Order;
use Livewire\Component;

class OrdersWidget extends Component
{
    public function render()
    {
        $orders = Order::where('status', 0)
                        ->orderBy('created_at', 'desc')
                        ->limit(8)
                        ->get();

        dd($orders);

        return view('livewire.orders-widget', [
            'orders' => $orders
        ]);
    }
}
