<?php
namespace App\Repositories;

use App\BlogCategorie;
use App\Contracts\BlogCategoryContract;
use App\Traits\UploadAble;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use InvalidArgumentException;

class BlogCategoryRepository extends BaseRepository implements BlogCategoryContract
{
    use UploadAble;

    public function __construct(BlogCategorie $model)
    {
        parent::__construct($model);
        $this->model = $model;

    }

    /**
     * @param string $orderù
     * @param string $sort
     * @param array $column
     * @return mixed
     */
    public function listCategories(string $order = 'id', string $sort = 'desc', array $columns = ['*'])
    {
           return $this->all($columns, $order, $sort); 
    }

     /**
     * @param int $id
     * @return mixed
     */
    public function findCategoryById(int $id)
    {
        try{
            return $this->findOrFail($id);
        } catch(ModelNotFoundException $e){
            throw new ModelNotFoundException($e);
        }
    }

    /**
     * @param array $params
     * @return mixed
     */
    public function createCategory(array $params)
    {
        try {
           $category = new BlogCategorie($params);
           $category->save();

           return $category;

        } catch(QueryException $exception){
            throw new InvalidArgumentException($exception->getMessage());
        }
    }

     /**
     * @param array $params
     * @return mixed
     */
    public function updateCategory(array $params)
    {
        $category= $this->findCategoryById($params['id']);
        $collection = collect($params)->except('_token');

        $category->update($collection->all());

        return $category;
    }

     /**
     * @param $id
     * @return bool
     */
    public function deleteCategory($id)
    {
        $category = $this->findCategoryById($id);
        $category->delete();

        return $category;
    }

    /**
     * @param $slug
     * @return mixed
     */
    public function findCategoryBySlug($slug)
    {
        return $this->model->where('slug', $slug)
                    ->first();
    }
}