<?php

namespace App\Providers;

use Cart;
use App\Category;
use App\Brand;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        // $categories = Category::where('parent_id', 1)
        //                     ->with('children')
        //                     ->orderBy('name', 'asc')
        //                     ->get();
      
    
        // view::composer('site.partials.header', function ($view) use ($categories) {
        //     $view->with('cartCount', \Cart::getContent()->count());
        //     $view->with('carts', \Cart::getContent());
        //     $view->with('total_price', \Cart::getSubTotal());
        //     $view->with('categories', $categories);
        // });

        // view::composer('site.includes.navbar', function ($view) use ($categories) {
        //     $view->with('categories', $categories);
        // });

        // view::composer('site.partials.footer_device_mobil', function($view) {
        //     $view->with('cartCount', \Cart::getContent()->count());
        // });
    }
}
