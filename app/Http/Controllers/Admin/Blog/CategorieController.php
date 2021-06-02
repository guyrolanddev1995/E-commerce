<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Contracts\BlogCategoryContract;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategorieController extends BaseController
{
    protected $categoryRepository;

    public function __construct(BlogCategoryContract $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $categories = $this->categoryRepository->listCategories();

        $this->setPageTitle('Categories', 'Liste des categories');
        return view('admin.blog.categories.index', compact('categories'));
    }

    public function show($categorie)
    {
        
    }

    public function create()
    {
        $this->setPageTitle('Categorie', 'Ajouter une catégorie');
        return view("admin.blog.categories.create");
    }

    public function store(Request $request)
    {
       $request->validate([
           'name' => 'required|unique:blog_categories,name'
       ]);

       $data = $request->except("_token");
       $category = $this->categoryRepository->createCategory($data);

       if(!$category){
            return $this->responseRedirectBack('Une erreur est survenue lors de la création de la catégorie', 'error', true, true);
       }

        return $this->responseRedirectBack('Catégorie créee avec succèss', 'success', false, false);
    }

    public function edit($id)
    {
        $category = $this->categoryRepository->findCategoryById($id);

        $this->setPageTitle('Categorie', 'Editer');
        return view('admin.blog.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $data = $request->except('_token');

        $category = $this->categoryRepository->updateCategory($data);

         if (!$category) {
            return $this->responseRedirectBack('Une erreur est survenue lors de la mise à jour de la catégorie.', 'error', true, true);
        }
        return $this->responseRedirect('admin.blog.categorie.index','Category updated successfully' ,'success',false, false);
    }

    public function delete($id)
    {
        $category = $this->categoryRepository->deleteCategory($id);
        if (!$category) {
            return $this->responseRedirectBack('Erreur survenue lors de la suppression de la catégorie', 'error', true, true);
        }
        return $this->responseRedirect('admin.categories.index', 'Category supprimée avec succèss' ,'success',false, false);
    }
}
