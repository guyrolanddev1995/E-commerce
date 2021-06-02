<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    public function show()
    {
        $user = User::findOrFail(\Auth::id());
        return view('site.pages.profil.show', compact('user'));
    }

    public function updateProfil(Request $request, $user)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'phone' => 'required',
        ]);

        $user = User::findOrFail($user);

        $user->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'phone' => $request->phone,
            'ville' => $request->ville,
            'pays' => $request->pays,
            'commune' => $request->commune,
            'quartier' => $request->quartier
        ]);

        return redirect()->route('profil.show')->with('success', 'Profil mise à jour avec succès');
    }

    public function updateEmail(Request $request, $user)
    {

        $request->validate([
            'email' => 'required|email',
            'new_email' => 'required|email',
        ]);

        $user = User::where('email', $request->email)->first();

        $verify_email = User::where('email', $request->new_email)->first();

        if($verify_email){
            return redirect()->back()->with('error', 'Cette adresse email existe déjà; choisissez une autre adresse email');
        }

        if($user){
            
            if($user->email != $request->new_email){
                $user->update([
                    'email' => $request->new_email
                ]);
        
                return redirect()->route('profil.show')->with('success', 'coordonnées de connexion mise à jour avec succès');

            } else {
                return redirect()->back()->with('error', 'Entrer une addresse email differente de l\'ancienne addresse email');
            }
        } else {
            return redirect()->back()->with('error', 'Addresse email inconnu');
        }

    }

    public function updatePassword(Request $request, $user)
    {

        $request->validate([
            'password' => 'required|min:6',
            'new_password' => 'required|min:6',
            'confirm_password' => 'required|same:new_password'
        ]);


        if(!\Hash::check($request->password, auth()->user()->password)){
            return redirect()->back()->with('error', 'L\'ancien mot de passe saisi est incorrect');
        }else{
            if(\Hash::check($request->new_password, auth()->user()->password)){
                return redirect()->back()->with('error', 'Entrer un mot de passe differente de l\'ancien mot de passe');
            } else {
                $user = User::findOrFail($user);
                $user->update([
                    'password' => Hash::make($request->new_password)
                ]);

                return redirect()->back()->with('success', 'Mot de passe mise à jour avec succès');
            }
        }
    }
}

