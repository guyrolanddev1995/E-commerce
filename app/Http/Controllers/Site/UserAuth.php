<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class UserAuth extends Controller
{
    public function showAuhForm()
    {
        return view("site.pages.payement.login");
    }

    public function store(Request $request)
    {
    
        $this->validate($request, [
            'user_code' => 'required|size:12'
        ]);

        $user = User::where([
            'email' => \Auth::user()->email,
            'code' => $request->user_code,
            'status' => 1
        ])->first();

        if($user){
            Session([
                'user' => $user
            ]);

            return redirect()->route('transaction-form');
        }

        else {
            return redirect()->back()->with('error', 'Votre code d\'achat est invalid. Veuillez saisir le bon code');
        }
    }
}
