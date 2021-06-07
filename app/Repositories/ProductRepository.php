<?php
namespace App\Repositories;

use App\Contracts\ProductContract;
use App\Http\Controllers\Admin\ProductImageController;
use App\Product;
use App\Traits\UploadAble;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Http\UploadedFile;
use InvalidArgumentException;

class ProductRepository extends BaseRepository implements ProductContract
{
    use UploadAble;

    private $productImage;

    /**
     * ProductRepository constructor
     * @param Product $model
     */
    public function __construct(Product $model)
    {
        parent::__construct($model);

        $this->model = $model;
        
    }

    /**
     * @param string $order
     * @param string $sort
     * @param array $columns
     * @return mixed
     */
    public function listProducts(string $order = 'id', string $sort = 'desc', array $columns = ['*'])
    {
        return $this->all($columns, $order, $sort);
    }

    /**
     * @param int $id
     * @return mixed
     * @throws ModelNotFoundException
     */
    public function findProductById(int $id)
    {
        try {
            return $this->findOrFail($id);

        } catch (ModelNotFoundException $e) {

            throw new ModelNotFoundException($e);
        }

    }

    /**
     * @param array $params
     * @return Product|mixed
     */
    public function createProduct(array $params, $productImage)
    {
        try {
            $collection = collect($params);
            
            $product_image = null;

                if($collection->has('image') && ($params['image'] instanceof UploadedFile)){
                $product_image = $this->uploadOne($params['image'], 'products/full');

                $path = '/products/full/'.$product_image;
                $destination = 'storage/products/300x300';
                $destination2 = 'storage/products/800x800';

                $this->resize($path, $destination, $product_image);
                $this->resize($path, $destination2, $product_image, 800, 800);
            }
            
            $featured = $collection->has('featured') ? 1 : 0;
            $status = $collection->has('status') ? 1 : 0;
            $is_new = $collection->has('is_new') ? 1 : 0;

            $product = Product::create([
                'brand_id' => $params["brand_id"],
                'slug' => \Str::slug($params['name'],'-'),
                'name' => $params['name'],
                'sku' => $params['sku'],
                'description' => $params['description'],
                'price' => $params['price'],
                'sale_price' => $params['sale_price'],
                'quantity' => $params['quantity'],
                'stock' => $params['stock'],
                'caracteristique' => $params['caracteristique'],
                'product_image' => $product_image,
                'status' => $status,
                'is_new' => $is_new,
                'featured' => $featured,
                'height' => $params['poids'] ?? Null
            ]);

            if ($collection->has('categories')) {
                $product->categories()->sync($params['categories']);
            }

            if ($collection->has('galerie')) {
                foreach($params['galerie'] as $img)
                {
                    $img = $productImage->moveProductGalerieImages($img);

                   $product->images()->create([
                       'full' => $img
                   ]);
                }
            }

            return $product;

        } catch (QueryException $exception) {
            throw new InvalidArgumentException($exception->getMessage());
        }
    }

     /**
     * @param array $params
     * @return mixed
     */
    public function updateProduct(array $params)
    {
        $product = $this->findProductById($params['product_id']);
        $collection = collect($params)->except('_token');
        
        $product_image = $product->product_image;

        if($collection->has('image') && ($params['image'] instanceof UploadedFile))
        {
            if($product_image != null)
            {
                $this->deleteOne('/products/full/'.$product_image);
                $this->deleteOne('/products/300x300/'.$product_image);
                $this->deleteOne('/products/800x800/'.$product_image);
            }

            $product_image = $this->uploadOne($params['image'], 'products/full');
            $path = '/products/full/'.$product_image;

            $destination = 'storage/products/300x300';
            $destination2 = 'storage/products/800x800';

            $this->resize($path, $destination, $product_image);
            $this->resize($path, $destination2, $product_image, 800, 800);
        }

        $featured = $collection->has('featured') ? 1 : 0;
        $status = $collection->has('status') ? 1 : 0;
        $is_new = $collection->has('is_new') ? 1 : 0;

        $merge = $collection->merge(compact('status', 'featured', 'is_new', 'product_image'));

        $product->update($merge->all());

        if ($collection->has('categories')) {
            $product->categories()->sync($params['categories']);
        } else {
            $product->categories()->detach();
        }

        return $product;
    }

    /**
     * @param $id
     * @return bool|mixed
     */
    public function deleteProduct($id)
    {
        $product = $this->findProductById($id);

        $product->delete();

        return $product;
    }

    /**
     * @param $slug
     * @return mixed
     */
    public function findProductBySlug($slug)
    {
        $product = Product::where('slug', $slug)->first();

        return $product;
    }

    /**
     * @param array $data
     * @param string $sort
     * @param string $order 
     * @return mixed
     */
    public function filterProducts(array $data, string $sort = 'id', String $order = "asc", $limit=null)
    {
        return Product::where($data)
                      ->orderBy($sort, $order)
                      ->limit($limit)
                      ->get();
    }

    /**
     * recupere tous les produits en vedettes
     * @param int $limit
     * @return mixed
     */
    public function getFeaturedProducts(int $limit= 16)
    {
        return Product::where('featured', 1)
                            ->where('status', 1)
                            ->inRandomOrder()
                            ->limit($limit)
                            ->get();
    }

     /**
     * recupere les nouveaux produits
     * @param int $limit
     * @return mixed
     */
    public function getNewProducts(int $limit = 16)
    {
        return Product::where('is_new', 1)
                        ->where('status', 1)
                        ->inRandomOrder()
                        ->limit($limit)
                        ->get();
    }

     /**
     * recupere les produits ajoutés recemment
     * @param int $limit
     * @return mixed
     */
    public function getRecentProductsAdded(int $limit = 24)
    {
        return  Product::whereDate('created_at', '<=' ,Carbon::now()->addDays(7)->format('Y-m-d'))
                    ->orderBy('created_at', 'desc')
                    ->limit($limit)
                    ->get();
    }
}