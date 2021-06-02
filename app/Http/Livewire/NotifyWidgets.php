<?php

namespace App\Http\Livewire;

use App\Contact;
use App\Order;
use App\Product;
use Livewire\Component;

class NotifyWidgets extends Component
{
    public function render()
    {
        $orders = Order::where("status", '0')
                        ->count();

        $online_products = Product::where('status', "1")
                                    ->count();

        $messages = Contact::where('is_read', 0)
                            ->count();


        $stock_epuise = Product::where("quantity", '<=', 'stock')
                                ->count();

        return view('livewire.notify-widgets', [
            'orders' => $orders,
            'online_products' => $online_products,
            'stock_epuise' => $stock_epuise,
            'messages' => $messages
        ]);
    }
}
