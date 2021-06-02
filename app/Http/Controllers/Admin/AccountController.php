<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\BaseController;
use App\Traits\UploadAble;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class AccountController extends BaseController
{
    use UploadAble;

    public function index()
    {
        $users = Admin::orderBy('nom', 'asc')->get();

        $this->setPageTitle('Utilisateurs', 'Liste des utilisateurs');
        return view('admin.account.index', compact('users'));
    }

    public function create()
    {
        $this->setPageTitle('Compte utilisateur', 'Ajouter un utilisateur');
        return view('admin.account.create');
    }

    public function show($account)
    {
        $user = Admin::findOrFail($account);

        $this->setPageTitle('Compte utilisateur', '#id');
        return view('admin.account.show', compact('user'));
    }

    public function store(Request $request)
    {
       $request->validate([
           'nom' => 'required',
           'prenom' => 'required',
           'email' => 'required|email|unique:admins',
       ]);

       $collection = collect($request);

       $avatar = null;

       if($collection->has('image') && ($request->image instanceof UploadedFile)){
           $avatar = $this->uploadOne($request->image, 'profils');
       }

       Admin::create([
           'nom' => $request->nom,
           'prenom' => $request->prenom,
           'email' => $request->email,
           'password' => \Hash::make("$request->nom@$request->prenom"),
           'phone' => $request->phone,
           'commune' => $request->commune,
           'avatar' => $avatar,
           'quartier' => $request->quartier,
           'departement' => $request->departement,
           'post' => $request->post,
           'status' => $request->status ? 1 : 0
       ]);

       return $this->responseRedirect('admin.account.create', 'Utilisateur ajouté avec succèss' ,'success',false, false);
    }



    public function edit($account)
    {
        $user = Admin::findOrFail($account);

        $this->setPageTitle('Utilisateur', 'Editer #id' . $user->id);
        return view('admin.account.edit', compact('user'));
    }

    public function update(Request $request, $account)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
        ]);

        
        $user = Admin::findOrFail($account);
        $avatar = $user->avatar;

        if($request->has('image') && ($request->image instanceof UploadedFile)){
            if($avatar != null){
                $this->deleteOne($avatar);
            }

            $avatar = $this->uploadOne($request->image, 'profils');
        }

        $user->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'phone' => $request->phone,
            'commune' => $request->commune,
            'avatar' => $avatar,
            'quartier' => $request->quartier,
            'departement' => $request->departement,
            'post' => $request->post,
            'status' => $request->status ? 1 : 0
        ]);

        return $this->responseRedirect('admin.account.index', 'Utilisateur mise à jour avec succèss' ,'success',false, false);

    }

    public function delete($account)
    {
        $user = Admin::findOrFail($account);

        $user->delete();

        return $this->responseRedirect('admin.account.index', 'Utilisateur supprimé avec succès' ,'info',false, false);
    }

    public function toggleStatus($account)
    {
        $user = Admin::findOrFail($account);

        if($user->status){
            $user->update([
                'status' => false
            ]);
            return $this->responseRedirectBack('Compte utilisateur désactivé avec succès', 'info',false, false);
        } else {
            $user->update([
                'status' => true
            ]);
            return $this->responseRedirectBack('Compte utilisateur activé avec succès', 'info',false, false);
        }
    }
}
