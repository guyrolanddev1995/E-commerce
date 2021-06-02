<?php
namespace App\Repositories;

use App\Contracts\ProductContract;
use App\Product;
use App\Traits\UploadAble;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use InvalidArgumentException;

class ProductRepository extends BaseRepository implements ProductContract
{
    use UploadAble;

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
    public function createProduct(array $params)
    {
        try {
            $collection = collect($params);
            
            $product_image = null;

            if($collection->has('image') && ($params['image'] instanceof UploadedFile)){
                $product_image = $this->uploadOne($params['image'], 'products');
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
            ]);

            if ($collection->has('categories')) {
                $product->categories()->sync($params['categories']);
            }

            if ($collection->has('galerie')) {
                foreach($params['galerie'] as $img)
                {
                   Storage::disk('public')->move('tmp/'.$img, 'products/galleries/'.$img);
                   $product->images()->create([
                       'full' => 'products/galleries/'.$img
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
                $this->deleteOne($product_image);
            }

            $product_image = $this->uploadOne($params['image'], 'products');
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
}