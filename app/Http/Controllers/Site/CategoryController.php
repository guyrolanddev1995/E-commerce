<?php

namespace App\Http\Controllers\Site;

use App\Contracts\CategoryContract;
use App\Contracts\ProductContract;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoryRepository;
    protected $productRepository;

    public function __construct(CategoryContract $categoryRepository, ProductContract $productRepository)
    {
        $this->categoryRepository = $categoryRepository;
        $this->productRepository = $productRepository;
    }

    /**
     * Afficher les produits d'une categorie
     * @param string $slug
     * @return mixed
     */
    public function show($slug)
    {
        $category = $this->categoryRepository->findBySlug($slug);
        $category->load(['parent' => function($query){
            $query->where('parent_id', '<>', null)
                  ->first();
        }]);

        $products = $category->products()->paginate(25);

        return view('site.pages.category', compact('category', 'products'));
    }

}
