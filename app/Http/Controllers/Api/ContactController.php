<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models 
use App\Models\Contact;

// Form Request
use App\Http\Requests\Contact\StoreRequest as ContactStoreRequest;

// Helpers
use Illuminate\Support\Facades\Mail;

// Mailable
use App\Mail\NewContact;

class ContactController extends Controller
{
    public function store(ContactStoreRequest $request) {
        $contact = Contact::create($request->validated());

        Mail::to('nicola.ceccagnoli.94@gmail.com')->send(new NewContact($contact));

        return response()->json([
            'success' => true,
            'message' => 'Contatto salvato'
        ]);

        // return response()->json($request->all());
    }
}
