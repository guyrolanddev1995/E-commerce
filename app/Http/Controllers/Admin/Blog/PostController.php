<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Contracts\BlogCategoryContract;
use App\Contracts\PostContract;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends BaseController
{
    protected $postReppsitory;
    protected $categoryRepository;

    public function __construct(PostContract $postReppsitory, BlogCategoryContract $categoryRepository)
    {
        $this->postReppsitory = $postReppsitory;
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $posts = $this->postReppsitory->listPosts($order='created_at', $sort="desc", $columns=['*']);

        $this->setPageTitle('Articles', 'Liste des articles');
        return view('admin.blog.post.index', compact('posts'));
    }

    public function show($id)
    {
        $post = $this->postReppsitory->findPostById($id);

        $this->setPageTitle('', '');
        return view('admin.blog.post.show', compact('post'));
    }

    public function create()
    {
        $categories = $this->categoryRepository->listCategories($order = 'name', $sort='asc', $columns = ['*']);

        $this->setPageTitle('Article', 'Ajouter un article');
        return view("admin.blog.post.create", compact('categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => "required|unique:blog_posts,title",
            'image' => 'required|image|mimes:png,jpg,jpeg,gif'
        ]);

        $data = $request->except('_token');

        $post = $this->postReppsitory->createPost($data);

        if(!$post){
            return $this->responseRedirectBack('Une erreur est survenue lors de la création de l\'article', 'error', true, true);
        }

            return $this->responseRedirectBack('Article crée avec succèss', 'success', false, false);
    }

    public function edit($id)
    {
        $categories = $this->categoryRepository->listCategories();
        $post = $this->postReppsitory->findPostById($id);

        $this->setPageTitle('Edition de','');

        return view('admin.blog.post.edit', compact('categories', 'post'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'image|mimes:png,jpg, jpeg'
        ]);

        $params = $request->except('_token');
        
        $post = $this->postReppsitory->updatePost($params);

        if(!$post){
            return $this->responseRedirectBack('Une erreur est survenue lors de la mise à jour de l\'article.', 'error', true, true);
        }

        return $this->responseRedirect('admin.blog.post.index', 'Article mise à jour avec succèss' ,'success',false, false);
    }

    public function delete($id)
    {
        $post = $this->postReppsitory->deletePost($id);
        if(!$post){
            return $this->responseRedirectBack('Une erreur est survenue lors de la suppression de l\'article', 'error', true, true);
        }
        return $this->responseRedirect('admin.blog.post.index', 'Category supprimée avec succèss' ,'success',false, false);
    }

}
