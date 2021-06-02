<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductList extends Component
{
    public $category;
    public $products;
    public $categories;

    public function mount($products, $categories, $category)
    {
        $this->products = $products;
        $this->categories = $categories;
        $this->category = $category;
    }
    public function render()
    {
        return view('livewire.product-list');
    }
}
