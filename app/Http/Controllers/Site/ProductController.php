<?php

namespace App\Http\Controllers\Site;

use App\Contracts\AttributeContract;
use App\Contracts\ProductContract;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

use Cart;

class ProductController extends Controller
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
        $attributes = $this->attributeRepository->listAttributes();

        $images = $product->images;
        

        return view('site.pages.product_detail', compact('product', 'attributes'));
    }

    public function addToCart(Request $request)
    {
       
       $product = $this->productRepository->findProductById($request->input('productId'));

       $options = $request->except('_token', 'productId', 'price', 'qty');

       $item =  Cart::get($product->id);
     
       if($item != null){
           Cart::update($product->id, [
              'quantity' => $request->input('qty')
           ]);

            return response()->json([
               'code' => 200,
               'message' => 'Panier mise à jour avec succès'
           ]);
       }
       else{
           Cart::add($product->id, $product->name, $request->input('price'), $request->input('qty'), $options, [], Product::class);
       }
     
       return response()->json([
           'code' => 200,
           'message' => 'Produit ajouté au panier avec succèss'
       ]);
    }
}
