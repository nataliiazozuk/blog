<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showall(){
      $contacts=Contact::all();
      return view("contacts",['contacts'=>$contacts]);
      
        }
}
