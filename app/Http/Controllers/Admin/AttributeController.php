<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\AttributeContract;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AttributeController extends BaseController
{
    protected $attributeRepository;

    public function __construct(AttributeContract $attributeRepository)
    {
        $this->attributeRepository = $attributeRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attributes =  $this->attributeRepository->listAttributes();
        
        $this->setPageTitle('Attributs', 'List des attributs');
        return view('admin.attributes.index', compact('attributes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->setPageTitle('Attributes', 'Créer un attribut');
        return view('admin.attributes.create');
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
            'code'          =>  'required',
            'name'          =>  'required',
            'frontend_type' =>  'required'
        ]);
    
        $params = $request->except('_token');
    
        $attribute = $this->attributeRepository->createAttribute($params);
    
        if (!$attribute) {
            return $this->responseRedirectBack('Une erreur est survenue lors de la création de l\'attribut.', 'error', true, true);
        }
        return $this->responseRedirect('admin.attributes.index', 'Attribut crée avec succèss' ,'success',false, false);
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
    public function edit($id)
    {
        $attribute = $this->attributeRepository->findAttributeById($id);

        $this->setPageTitle('Attributes', 'Editer l\'attribut #:'.$attribute->name);
        return view('admin.attributes.edit', compact('attribute'));
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
            'code'          =>  'required',
            'name'          =>  'required',
            'frontend_type' =>  'required'
        ]);
    
        $params = $request->except('_token');
    
        $attribute = $this->attributeRepository->updateAttribute($params);
    
        if (!$attribute) {
            return $this->responseRedirectBack('Une erreur est survenue lors de la mise à jour de l\'attribut.', 'error', true, true);
        }
        return $this->responseRedirectBack('Attribut mise à jour avec succèss' ,'success',false, false);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $attribute = $this->attributeRepository->deleteAttribute($id);

        if (!$attribute) {
            return $this->responseRedirectBack('Une erreur est survenue lors de la suppression de l\'attribut', 'error', true, true);
        }

        return $this->responseRedirect('admin.attributes.index', 'Attribut supprimé avec succèss' ,'success',false, false);
        }
}
