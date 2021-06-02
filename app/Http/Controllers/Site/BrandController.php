<?php

namespace App\Http\Controllers\Site;

use App\Brand;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function show($brand)
    {   
        $brand = Brand::where('slug', $brand)->first();
        $products = $brand->products()->paginate(25);

        return view('site.pages.brands.show', compact('products', 'brand'));
    }
}
