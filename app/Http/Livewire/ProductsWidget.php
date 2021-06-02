<?php

namespace App\Http\Livewire;

use App\Product;
use Livewire\Component;

class ProductsWidget extends Component
{
    public function render()
    {
        $products = Product::orderBy('created_at', "desc")
                            ->limit(5)
                            ->get();
                            
        return view('livewire.products-widget', [
            'products'  => $products
        ]);
    }
}
