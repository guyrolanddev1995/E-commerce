<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends BaseController
{
    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->get();

        $this->setPageTitle('Boite de reception', 'Liste des messages');
        return view('admin.messages.index', compact('contacts'));
    }

    public function show($id)
    {
        $contact = Contact::findOrFail($id);
       
        $contact->update([
            'is_read' => true
        ]);
        
        $this->setPageTitle('Boite de reception', 'Message#');
        return view('admin.messages.show', compact('contact'));
    }

    public function delete($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return $this->responseRedirect('admin.contact', 'Message supprimée avec succèss' ,'info',false, false);
    }
}
