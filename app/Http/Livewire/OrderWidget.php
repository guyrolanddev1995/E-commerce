<?php

namespace App\Http\Livewire;

use App\Order;
use Livewire\Component;

class OrderWidget extends Component
{
    public function render()
    {
        $orders = Order::where('status', "0")
                        ->orderBy('created_at', 'desc')
                        ->limit(8)
                        ->get();

        return view('livewire.order-widget', [
            'orders' => $orders
        ]);
    }
}
