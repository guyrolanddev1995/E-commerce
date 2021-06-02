<?php

namespace App\Repositories;

use App\Brand;
use App\Category;
use App\Contracts\CategoryContract;
use App\Traits\UploadAble;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Http\UploadedFile;
use InvalidArgumentException;

use function PHPUnit\Framework\isNull;

class CategoryRepository extends BaseRepository implements CategoryContract
{
    use UploadAble;

    public function __construct(Category $model)
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
    public function listCategories(string $order = "id", string $sort = "desc", array $columns = ['*'])
    {
        return Category::where('parent_id', '<>', '' )
                        ->with('parent')
                        ->orderby($order, $sort)
                        ->get($columns);
    }

     /**
     * @param int $id
     * @return mixed
     */
    public function findCategoryById(int $id)
    {
        try {
            return $this->findOrFail($id);

        } catch(ModelNotFoundException $e){

            throw new ModelNotFoundException($e);
        }
    }

     /**
     * @param array $data
     * @return mixed
     */
    public function createCategory(array $data)
    {
        try {
            $collection = collect($data);
            $image = null;

            if($collection->has('image') && ($data['image'] instanceof UploadedFile)){
                $image = $this->uploadOne($data['image'], 'categories');
            }

            $featured = $collection->has('featured') ? 1 : 0;
            $menu = $collection->has('menu') ? 1 : 0;


            $category = Category::create([
                'name' => $data['name'],
                'slug' => \Str::slug($data['name'], '-'),
                'featured' => $featured,
                'menu' => $menu,
                'niveau' => $data['niveau'] ? $data['niveau'] : '1',
                'image' => $image,
                'parent_id' => $data['parent_id']
            ]);

            return $category;

        } catch(QueryException $exception){
            throw new InvalidArgumentException($exception->getMessage());
        }
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function updateCategory(array $data)
    {
        $category = $this->findCategoryById($data['id']);
        $collection = collect($data)->except('_token');
        $image = $category->image;

        if($collection->has('image') && ($data['image'] instanceof UploadedFile))
        {
            if($image != null)
            {
                $this->deleteOne($category->image);
            }

            $image = $this->uploadOne($data['image'], 'categories');
        }

        $featured = $collection->has('featured') ? 1 : 0;
        $menu = $collection->has('menu') ? 1 :  0;

        $category->update([
            'name' => $data['name'],
            'slug' => \Str::slug($data['name'], '-'),
            'featured' => $featured,
            'menu' => $menu,
            'niveau' => $data['niveau'],
            'image' => $image,
            'parent_id' => $data['parent_id']
        ]);

        return $category;
    }

    /**
     * @param $id
     * @return bool
     */
    public function deleteCategory($id)
    {
        $category = $this->findCategoryById($id);

        if($category->image != null){
            $this->deleteOne($category->image);
        }

        $category->delete();

        return $category;
    }


    /**
     * Filtrer une catégorie
     * @param Array data
     * @return mixed
     */
    public function filterCategory($data)
    {
        $root = Category::whereNull('parent_id')
                        ->with('children')
                        ->orderBy('name', 'asc')
                        ->get();

       return $root;
    }

    /**
     * find category by slug
     * @param $slug
     */
    public function findBySlug($slug)
    {
        return Category::where('slug', $slug)
                ->first();
    }

    /**
     * @return mixed
     */
    public function treeList()
    {
        return Category::orderByRaw('-name ASC')
            ->get()
            ->nest()
            ->listsFlattened('name');
    }

    /**
     * @param string $slug
     * @return mixed
     * @throws ModelNotFoundException
     */
    public function filterCatWithParentID($slug)
    {
        return Category::with('children')
                        ->where('slug', '<>', $slug)
                        ->where('menu', 1)
                        ->where('parent_id', 1)
                        ->orderBy('name', 'asc')
                        ->limit(8)
                        ->get();
    }

    /**
     * @param string $slug
     * @return mixed
     * @throws ModelNotFoundException
     */
    public function filterCatWithoutParentID($slug)
    {
        return Category::with('children')
                        ->where('slug', '<>', $slug)
                        ->where('parent_id', '<>', NULL)
                        ->orderBy('name', 'asc')
                        ->limit(8)
                        ->get();
    }

    /**
     * Récuperer les catégories favorits
     * @return mixed
     */
    public function getFacturedCategories()
    {
        return Category::where('featured', 1)
                        ->orderBy('name', 'asc')
                        ->limit(8)
                        ->get();
    }

    /**
     * Trier l'affichage des produits d'une catégorie
     * @param string $slug
     * @param array $sort
     * @return mixed
     */
    public function filterCategoryProducts($slug, $sort)
    {
        $category = Category::where('slug', $slug)->first();

        switch ($sort) {
            case 'lowest-price':
                return $category->products()->orderBy('price', 'asc')->paginate(5);
                break;

            case 'highest-price':
                return $category->products()->orderBy('price', 'desc')->paginate(50);
                break;

            case 'oldest':
                return $category->products()->orderBy('created_at', 'asc')->paginate(50);
                break;
            
            case 'newest':
                return $category->products()->orderBy('created_at', 'desc')->paginate(50);
                break;

            default:
                return $category->products()->orderBy('created_at', 'desc')->paginate(50);
                break;
        }
    }

    /**
     * Filtrer par prix, les produits d'une categories
     * @param string $string
     * @param int $min 
     * @param int $max
     * @return mixed
     */
    public function filterProductByPrice($slug, $min, $max)
    {
        $category = Category::where('slug', $slug)->first();

        return $category->products()->whereBetween('price', [$min, $max])->paginate(50);
    }



    /**
     * recuperer la liste des produits d'une categorie à afficher sur la boutique
     * @return mixed
     */
    public function getDisplayedCategories()
    {
        return Category::with('products')
                       ->where('display', 1)
                       ->where('parent_id', '<>', null)
                       ->get();
                       
    }

    public function getQueryBuilder($slug)
    {
        $category = $this->findBySlug($slug);
        return $category->products();
    }

    /**
     * Trier les produits par categories et mmarques
     * @param string $cat_slug
     * @param string $brand_slug
     * @return mixed
     */
    public function filterProductsByCatWithBrand(string $cat_slug, string $brand_slug)
    {
        $brand = Brand::where('slug', $brand_slug)->first();

        if($brand){
            $products = $this->getQueryBuilder($cat_slug)
                            ->where('brand_id', $brand->id)
                            ->paginate(50);
        } else  {
            $products = $this->getQueryBuilder($cat_slug)
                              ->paginate(50);
        }
      
        return $products;
    }

    public function getSubCategories()
    {
        $categories = Category::where('parent_id', 1)
                            ->with('children')
                            ->orderBy('name', 'asc')
                            ->get();

        return $categories;
    }

}