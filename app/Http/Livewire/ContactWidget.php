<?php

namespace App\Http\Livewire;

use App\Contact;
use Livewire\Component;

class ContactWidget extends Component
{
    public function render()
    {
        $contacts = Contact::where('is_read', 0)
                ->orderBy('created_at', 'desc')
                ->limit(8)
                ->get();

        return view('livewire.contact-widget', [
            'contacts' => $contacts
        ]);
    }
}
