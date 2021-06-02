<?php

namespace App\Http\Controllers\Site\Blog;

use App\BlogPost;
use App\Contracts\BlogCategoryContract;
use App\Contracts\PostContract;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    protected $postRepository;
    protected $categoryRepository;

    public function __construct(PostContract $postRepository, BlogCategoryContract $categoryRepository)
    {
        $this->postRepository = $postRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $posts = BlogPost::where('status', 1)->orderBy('created_at', 'desc')->paginate(12);

        return view('site.pages.blog.news', compact('posts'));
    }

    public function show($slug)
    {
        $post = $this->postRepository->findPostBySlug($slug);
        $others_posts = BlogPost::where('slug', '<>', $slug)->where('status', 1)->limit(4)->get();
        $categories = $this->categoryRepository->listCategories($order="name", $sort="asc", $columns = ["*"]);

        return view('site.pages.blog.news_detail', compact('post', 'others_posts', 'categories'));
    }
}
