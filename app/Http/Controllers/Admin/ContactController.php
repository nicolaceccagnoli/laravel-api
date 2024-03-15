<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Contact;

class ContactController extends Controller
{
    public function index() {

        // $contacts = Contact::all();

        // Creo una query che indipendentemente dall'inserimento di dati negli input
        // mi restituirà di base tutti i contatti
        $contactsQuery = Contact::select('*');

        $queryStringParams = request()->all();

        // Se sto filtrando per nome
        if(isset($queryStringParams['name'])) {
            $contactsQuery->where('name', 'LIKE', '%'.$queryStringParams['name'].'%');
        }

        // Se sto filtrando per mail
        if(isset($queryStringParams['email'])) {
            $contactsQuery->where('email', 'LIKE', '%'.$queryStringParams['email'].'%');
        }
        
        // Eseguo la query
        $contacts = $contactsQuery->get();

        return view('admin.contacts.index', compact('contacts'));
    }

    public function show(Contact $contact) {

        return view('admin.contacts.show', compact('contact'));
    }

    public function destroy(Contact $contact) {

        $contact->delete();

        return redirect()->route('admin.contacts.index');
    }

}
