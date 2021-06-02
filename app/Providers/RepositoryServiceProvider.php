<?php

namespace App\Providers;

use App\Contracts\BlogCategoryContract;
use App\Contracts\AttributeContract;
use App\Contracts\BrandContract;
use App\Contracts\CategoryContract;
use App\Contracts\OrderContract;
use App\Contracts\PostContract;
use App\Contracts\ProductContract;
use App\Contracts\TeamContract;
use App\Repositories\AttributeRepository;
use App\Repositories\BrandRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\OrderRepository;
use App\Repositories\ProductRepository;
use App\Repositories\BlogCategoryRepository;
use App\Repositories\PostRepository;
use App\Repositories\TeamRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    protected $repositories = [
        CategoryContract::class => CategoryRepository::class,
        AttributeContract::class => AttributeRepository::class,
        BrandContract::class => BrandRepository::class,
        ProductContract::class => ProductRepository::class,
        OrderContract::class => OrderRepository::class,
        BlogCategoryContract::class => BlogCategoryRepository::class,
        PostContract::class => PostRepository::class,
        TeamContract::class => TeamRepository::class,
    ];
    
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        foreach($this->repositories as $interface => $implementation)
        {
            $this->app->bind($interface, $implementation);
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
