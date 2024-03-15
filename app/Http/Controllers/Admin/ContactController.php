<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Contact;

class ContactController extends Controller
{
    public function index() {

        $contacts = Contact::all();

        return view('admin.contacts.index', compact('contacts'));
    }
}
