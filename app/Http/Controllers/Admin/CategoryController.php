<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\CategoryContract;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoryController extends BaseController
{
   
   /**
    * @var CategoryContract
    */
    protected $categoryRepository;
    
    /**
     * CategoryController constructor
     * @param CategoryContract $categoryRepository
     */
    public function __construct(CategoryContract $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = $this->categoryRepository->listCategories();

        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->categoryRepository->treeList('id', 'asc');
        
        $this->setPageTitle('Categorie', 'Créer une catégorie');
        return view('admin.categories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:categories,name',
            'parent_id' => 'required|not_in:0',
            'image' => 'nullable|mimes:jpg,jpeg,png|max:1000'
        ]);

        $data = $request->except('_token');

        $category = $this->categoryRepository->createCategory($data);

        if(!$category){
           return redirect()->back()->with('error','Une erreur est survenue lors de la création de la catégorie');
        }

        return redirect()->back()->with('success','Catégorie créée avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
        {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $category = $this->categoryRepository->findBySlug($slug);
        $categories = $this->categoryRepository->treeList();

        return view('admin.categories.edit', compact('categories', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'      =>  ['required', Rule::unique('categories')->ignore($id)],
            'parent_id' =>  'required|not_in:0',
            'image'     =>  'nullable|mimes:jpg,jpeg,png|max:1000'
        ]);
    
        $data = $request->except('_token');
    
        $category = $this->categoryRepository->updateCategory($data);
    
        if (!$category) {
            return redirect()->back()->with('error','Une erreur est survenue lors de la mise à jour de la catégorie');
           
        }
       
        return redirect()->route('admin.categories.index')->with('success','Categorie mise à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = $this->categoryRepository->deleteCategory($id);

        if (!$category) {
            return redirect()->back()->with('error','Une erreur est survenue lors de la suppression de la catégorie');
        }
        return redirect()->route('admin.categories.index')->with('success','Categorie supprimée avec succès');
    }
}
