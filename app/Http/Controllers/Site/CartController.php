<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Cart;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    public function index()
    {
        return view('site.pages.shopping_cart');
    }
    
    public function getCart()
    {
        $cart = Cart::getContent();
        $total = Cart::getSubTotal();
        
        return response()->json([
            'cart' => $cart,
            'total' => $total
        ]);
    }

    public function getCartCount()
    {
        $count = Cart::getContent()->count();
        $total = Cart::getSubTotal();
        
        return response()->json([
            'cartCount' => $count,
            'total' => $total
        ]);
    }

    public function updateCart(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'quantity' => 'required|numeric'
        ]);

        if($validator->failed()){
            session()->flash('error', collect(['Entrer une quantité valide']));
            return response()->json(['success' => true]);
        }

        $product = Product::findOrFail($id);

        $quantity = intval($request->quantity);

        if($quantity > $product->quantity){
            return response()->json([
                'code' => 501,
                'message' => 'La quantité entrée est superieur à la quantité du produit disponible en stock'
            ]);
        } else {
            Cart::update($id, array(
                'quantity' => [
                    'relative' => false ,
                    'value' => $request->quantity
                ]
            ));
    
            return response()->json([
                'code' => 200,
                'message' => 'Quantité mise à jour avec succès']);
        }
    }

    public function removeItem($id)
    {
        Cart::remove($id);

        if (Cart::isEmpty()) {
            return response()->json([
                'code' => 200,
                'message' => 'le panier a été vidé.'
            ]);
        }

        return response()->json([
            'code' => 200,
            'message' => 'le produit a été supprimé du panier.'
        ]);
    }

    public function clearCart()
    {
        Cart::clear();

        return redirect()->back()->with('error', 'le panier a été vidé.');
    }


}
