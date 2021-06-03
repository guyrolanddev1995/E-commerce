<?php

namespace App\Http\Controllers\Site;

use App\BlogPost;
use App\Category;
use App\Contracts\CategoryContract;
use App\Contracts\ProductContract;
use App\Http\Controllers\Controller;
use App\Product;
use App\Slide;
use Carbon\Carbon;
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

        $categories = Category::where('niveau', '2')
                              ->whereHas('children')
                              ->where('featured', 1)
                              ->with(['children' => function($query){
                                  return $query->where('niveau', '3')
                                        ->where('featured', 1)
                                        ->whereHas('products')
                                        ->with('products')
                                        ->get();
                              }])
                              ->orderBy('name', 'asc')
                              ->get();

        $recent_added = Product::whereDate('created_at', '<=' ,Carbon::now()->addDays(7)->format('Y-m-d'))
                                ->orderBy('created_at', 'desc')
                                ->limit(24)
                                ->get();

        return view('site.pages.home', compact(
            'recent_added', 'featured', 'new_products', 'categories'
        ));
    }
}
