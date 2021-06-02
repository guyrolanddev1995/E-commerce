<?php 
namespace App\Repositories;

use App\BlogPost;
use App\Contracts\PostContract;
use App\Traits\UploadAble;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Http\UploadedFile;
use InvalidArgumentException;

class PostRepository extends BaseRepository implements PostContract
{
   use UploadAble;

   public function __construct(BlogPost $model)
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
    public function listPosts(string $order = 'id', string $sort = 'desc', array $columns = ['*'])
    {
        return $this->all($columns, $order, $sort);
    }

     /**
     * @param int $id
     * @return mixed
     */
    public function findPostById(int $id)
    {
        try {
            return $this->findOrFail($id);
        } catch (ModelNotFoundException $e) {
            throw new ModelNotFoundException($e);
        }
    }

    /**
     * @param array $params
     * @return mixed
     */
    public function createPost(array $params)
    {
        try {
           $collection = collect($params);
           $image = null;

           if($collection->has('image') && ($params['image'] instanceof UploadedFile)){
             $image = $this->uploadOne($params['image'], 'blogs');
           }
        
           $status = $collection->has('status') ? 1 : 0;
           $merge = $collection->merge(compact('status', 'image'));

           $post = new BlogPost($merge->all());

           $post->save();

           return $post;

        } catch (QueryException $e) {
            throw new InvalidArgumentException($e->getMessage());
        }
    }

     /**
     * @param array $params
     * @return mixed
     */
    public function updatePost(array $params)
    {
       
        $post = $this->findPostById($params['id']);
        $collection = collect($params)->except('_token');

        $image = $post->image;

        if($collection->has('image') && ($params['image'] instanceof UploadedFile)){
            if($image != null){
                $this->deleteOne($image);
            }

            $image = $this->uploadOne($params['image'], 'blogs');
        }

        $status = $collection->has('status') ?  1 : 0;
        $merge = $collection->merge(compact('status', 'image'));
        $post->update($merge->all());

        return $post;
    }

     /**
     * @param $id
     * @return bool
     */
    public function deletePost($id)
    {
        $post = $this->findPostById($id);

        if($post->image != null){
            $this->deleteOne($post->image);
        }

        $post->delete();
        return $post;
    }

    /**
     * @param $slug
     * @return mixed
     */
    public function findPostBySlug($slug)
    {
        return $this->model
                    ->where('slug', $slug)
                    ->first();
    }
}