<?php

namespace App\Http\Controllers\Site;

use App\Contracts\AttributeContract;
use App\Contracts\ProductContract;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    protected $productRepository;
    protected $attributeRepository;

    public function __construct(ProductContract $productRepository, AttributeContract $attributeRepository)
    {
        $this->productRepository = $productRepository;
        $this->attributeRepository = $attributeRepository;
    }

    public function show($slug)
    {
        $product = $this->productRepository->findProductBySlug($slug);
        $images = $product->images;

        $other_products = Product::where('slug', '<>', $slug)
                                  ->where('brand_id', $product->brand_id)
                                  ->limit(12)
                                  ->get();

        $recommanded = Product::where('slug', '<>', $slug)
                                ->inRandomOrder()
                                ->limit(8)
                                ->get();

        return view('site.pages.product_details', compact('product', 'images', 'other_products', 'recommanded'));
    }
}
