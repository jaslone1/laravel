<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Http\Response;

class ContactFormController extends Controller
{

 public function store(Request $request)
 {
     $contact = new Contact([
         'name' => $request->input('name'),
         'email' => $request->input('email'),
         'subject' => $request->input('subject'),
         'message' => $request->input('message'),
     ]);
     $contact->save();

     return response()->json('Message Sent!');
 }

}
