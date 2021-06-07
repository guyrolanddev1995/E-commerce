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
        $featured = $this->productRepository->getFeaturedProducts();
        $new_products =  $this->productRepository->getNewProducts();
        $recent_added = $this->productRepository->getRecentProductsAdded();
        $categories = $this->categoryRepository->displayCategoriesWithProductsOnHomePage();

        return view('site.pages.home', compact(
            'recent_added', 'featured', 'new_products', 'categories'
        ));
    }
}
