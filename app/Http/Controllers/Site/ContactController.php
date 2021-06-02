<?php

namespace App\Http\Controllers\Site;

use App\Contact;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showContact()
    {
        return view('site.pages.contact');
    }

    public function store(ContactFormRequest $request)
    {
        Contact::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'message' => $request->message
        ]);

        return redirect()->back()->with('success', 'Message envoyer avec succèss');
    }
}
