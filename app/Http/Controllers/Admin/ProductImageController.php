<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\ProductContract;
use App\Http\Controllers\Controller;
use App\ProductImage;
use App\Traits\UploadAble;
use Illuminate\Http\Request;

class ProductImageController extends Controller
{
    use UploadAble;

    protected $productRepository;

    public function __construct(ProductContract $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function upload(Request $request)
    {
        $product = $this->productRepository->findProductById($request->product_id);

        if ($request->has('image')) {

            $image = $this->uploadOne($request->image, 'products/galleries');

            $productImage = new ProductImage([
                'full'      =>  $image,
            ]);

            $product->images()->save($productImage);
        }

        return response()->json(['status' => 'Success']);
    }

    public function delete($id)
    {
        $image = ProductImage::findOrFail($id);

        if ($image->full != '') {
            $this->deleteOne($image->full);
        }
        $image->delete();

        return redirect()->back();
    }

    public function uploadInTmp(Request $request)
    {
        $file = $request->file('file');
        $name = basename($file->storePublicly('/tmp', ['disk' => 'public']));
        
        return response()->json([
            'name' => $name,
            'original_name' => $file->getClientOriginalName(),
        ]);
    }
}
