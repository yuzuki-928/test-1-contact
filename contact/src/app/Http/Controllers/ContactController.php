<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
  public function index()
  {
    return view('index');
  }
  
  public function confirm(ContactRequest $request)
  {
    dd($request);
    $contact = $request->only(['last_name', 'first_name', 'email', 'tel', 'address', 'building', 'detail', 'id']);
    return view('confirm', ['contact' => $contact]);
  }
  
  public function store(ContactRequest $request)
  {
    $contact = $request->only(['last_name', 'first_name', 'email', 'tel', 'address', 'building', 'detail', 'id']);
    Contact::create($contact);
    return view('thanks');
  }
}