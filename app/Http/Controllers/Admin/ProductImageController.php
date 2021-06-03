<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\ProductContract;
use App\Http\Controllers\Controller;
use App\ProductImage;
use App\Traits\UploadAble;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

            $image = $this->uploadOne($request->image, 'products/galleries/full');

            $path = '/products/galleries/full/'.$image;
            $destination = 'storage/products/galleries/300x300';
            $destination2 = 'storage/products/galleries/800x800';

            $this->resizProductGalerieImage($path, $destination, $destination2, $image);

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
            $this->deleteOne('/products/galleries/full/'.$image->full);
            $this->deleteOne('/products/galleries/300x300/'.$image->full);
            $this->deleteOne('/products/galleries/800x800/'.$image->full);
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

    public function moveProductGalerieImages($file)
    {
        Storage::disk('public')->move('tmp/'.$file, 'products/galleries/full/'.$file);
        
        $path = '/products/galleries/full/'.$file;
        $destination = 'storage/products/galleries/300x300';
        $destination2 = 'storage/products/galleries/800x800';

        $this->resizProductGalerieImage($path, $destination, $destination2, $file);

        return $file;
    }

    protected function resizProductGalerieImage($path, $destination, $destination2, $filename)
    {
        $this->resize($path, $destination, $filename);
        $this->resize($path, $destination2, $filename, 800, 800);
    }
}
