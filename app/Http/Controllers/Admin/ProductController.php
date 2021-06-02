<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\BrandContract;
use App\Contracts\CategoryContract;
use App\Contracts\ProductContract;
use App\Http\Controllers\BaseController;
use App\Http\Requests\StoreProductFormRequest;
use App\Http\Requests\UpdateProductFormRequest;
use Illuminate\Http\Request;

class ProductController extends BaseController
{
    protected $brandRepository;
    protected $categoryRepository;
    protected $productRepository;

    public function __construct(
        BrandContract $brandRepository,
        CategoryContract $categoryRepository,
        ProductContract $productRepository
    )
    {
        $this->brandRepository = $brandRepository;
        $this->categoryRepository = $categoryRepository;
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        $products = $this->productRepository->listProducts();

        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $brands = $this->brandRepository->listBrands('name', 'asc');

        $categories = $this->categoryRepository->getSubCategories();

        $this->setPageTitle('Produit', 'Créer un produit');
        return view('admin.products.create', compact('categories', 'brands'));
    }

    public function store(StoreProductFormRequest $request)
    {
        
        $params = $request->except('_token');
        
        $product = $this->productRepository->createProduct($params);

        if (!$product) {
            return redirect()->back()->with('error','Une erreur est survenue lors de la creation du produit.');
        }

        return redirect()->back()->with('success','Produit crée avec succès');
    }

    public function edit($id)
    {
        $product = $this->productRepository->findProductById($id);
        $brands = $this->brandRepository->listBrands('name', 'asc');
        $categories = $this->categoryRepository->getSubCategories();

        $this->setPageTitle('Produit', 'Editer #' . $product->slug);
        return view('admin.products.edit', compact('categories', 'brands', 'product'));
    }

    public function update(UpdateProductFormRequest $request)
    {
        $params = $request->except('_token');

        $product = $this->productRepository->updateProduct($params);

        if (!$product) {
            return redirect()->back()->with('error','Une erreur est survenue lors de la mise à jour du produit.');
           
        }
        return redirect()->route('admin.products.index')->with('success','Produit mise à jour avec succèss');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $product = $this->productRepository->deleteProduct($id);

        if (!$product) {
            return redirect()->back()->with('error','Une erreur est survenue lors de la suppression du produit');
        }
      
        return redirect()->route('admin.products.index')->with('success','Produit supprimée avec succèss');
    }

}
