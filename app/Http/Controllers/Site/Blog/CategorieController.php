<?php

namespace App\Http\Controllers\Site\Blog;

use App\BlogPost;
use App\Contracts\BlogCategoryContract;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    protected $categorieRepositpry;

    public function __construct(BlogCategoryContract $categorieRepositpry)
    {
        $this->categorieRepositpry = $categorieRepositpry;
    }

    public function getPosts($slug)
    {
        $categorie = $this->categorieRepositpry->findCategoryBySlug($slug);

        $posts = BlogPost::where('categorie_id', $categorie->id)->paginate(21);

        return view('site.pages.blog.categorie', compact('posts', 'categorie'));
    }
}
