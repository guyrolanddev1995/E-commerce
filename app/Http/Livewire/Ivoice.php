<?php

namespace App\Http\Livewire;

use App\Contracts\OrderContract;
use App\Product;
use Livewire\Component;

class Ivoice extends Component
{
    public $order;
    public $products;

    public function mount($order, $products)
    {
        $this->order = $order;
        $this->products = $products;
    }

    public function updateInvoce($code, OrderContract $orderRepository)
    {
        $order = $orderRepository->findOneOrderBy(['code' => $code]);
        $products = $order->products;

        foreach($products as $item)
        {
           $product = Product::find($item->id);
           $quantity = $item->pivot->quantity;
           
           $product->update([
               'quantity' => $product->quantity - $quantity
           ]);
        }
    }

    public function render()
    {
        return view('livewire.ivoice');
    }
}
