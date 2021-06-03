<?php

namespace App\Http\Controllers\Site;

use App\BlogPost;
use App\Category;
use App\Contracts\CategoryContract;
use App\Contracts\ProductContract;
use App\Http\Controllers\Controller;
use App\Product;
use App\Slide;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $categoryRepository;
    protected $productRepository;

    public function __construct(CategoryContract $categoryRepository, ProductContract $productRepository)
    {
        $this->categoryRepository = $categoryRepository;
        $this->productRepository  = $productRepository;
    }

    public function index()
    {
        $products = Product::where('status', 1)
                            ->orderBy('created_at','desc')
                            ->limit(12)
                            ->get();

        $featured = Product::where('featured', 1)
                            ->where('status', 1)
                            ->inRandomOrder()
                            ->limit(16)
                            ->get();

        $new_products = Product::where('is_new', 1)
                            ->where('status', 1)
                            ->inRandomOrder()
                            ->limit(16)
                            ->get();

        return view('site.pages.home', compact(
            'products', 'featured', 'new_products'
        ));
    }
}
