eb<?php

namespace App\Http\Controllers\Admin;

use App\Attribute;
use App\Http\Controllers\Controller;
use App\Product;
use App\ProductAttribute;
use Illuminate\Http\Request;

class ProductAttributeController extends Controller
{
    public function loadAttributes()
    {
        $attributes = Attribute::all();
        return response()->json($attributes);
    }

    public function loadProductAttributes(Request $request)
    {
        $product = Product::findOrFail($request->id);

        return response()->json($product->attributes);
    }

    public function loadValues(Request $request)
    {
        $attribute = Attribute::findOrFail($request->id);
        
        return response()->json($attribute->values);
    }

    public function addProductAttribute(Request $request)
    {
        $productAttribute = ProductAttribute::create($request->data);
        
        if($productAttribute){
            return response()->json([
                'message' => 'Attribut du produit crée avec sucèss'
            ]);
        }
        else{
            return response()->json([
                'message' => 'Un erreur est survenue lors de la création de l\'attribut du produit'
            ]);
        }

    }

    public function deleteProductAttribute(Request $request)
    {
        $productAttribute = ProductAttribute::findOrFail($request->id);
        $productAttribute->delete();

        return response()->json(['status' => 'success', 'message' => 'Attribut du produit supprimé avec succèsss']);

    }
}
