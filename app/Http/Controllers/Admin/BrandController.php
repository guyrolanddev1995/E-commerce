<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\BrandContract;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;

class BrandController extends BaseController
{
     /**
     * @var BrandContract
     */
    protected $brandRepository;

    /**
     * CategoryController constructor.
     * @param BrandContract $brandRepository
     */
    public function __construct(BrandContract $brandRepository)
    {
        $this->brandRepository = $brandRepository;
    }

    public function index()
    {
        $brands = $this->brandRepository->listBrands();

        $this->setPageTitle('Marques', 'Liste des marques');
        return view('admin.brands.index', compact('brands'));
    }

    public function create()
    {
        $this->setPageTitle('Marque', 'Ajouter une marque');
        return view('admin.brands.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'      =>  'required|max:191',
            'image'     =>  'mimes:jpg,jpeg,png|max:1000'
        ]);

        $params = $request->except('_token');

        $brand = $this->brandRepository->createBrand($params);

        if (!$brand) {
            return redirect()->back()->with('error','Une erreur est survenue lors de la création de la marque.');
        }
        
        return redirect()->back()->with('success','Marque ajoutée avec succèss');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $brand = $this->brandRepository->findBrandById($id);

        $this->setPageTitle('Marque', 'Editer #'.$brand->name);
        return view('admin.brands.edit', compact('brand'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'name'      =>  'required|max:191',
            'image'     =>  'mimes:jpg,jpeg,png|max:1000'
        ]);

        $params = $request->except('_token');

        $brand = $this->brandRepository->updateBrand($params);

        if (!$brand) {
            return redirect()->back()->with('error','Une erreur est survenue lors de la mise à jour de la marque.');
        }

        return redirect()->route('admin.brands.index')->with('success','Marque mise à jour avec succès');
        
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        $brand = $this->brandRepository->deleteBrand($id);

        if (!$brand) {
            return redirect()->back()->with('error','Une erreur est survenue lors de la suppression de la marque.');
        }

        return redirect()->route('admin.brands.index')->with('success','Marque supprimée avec succès');
    }
}
