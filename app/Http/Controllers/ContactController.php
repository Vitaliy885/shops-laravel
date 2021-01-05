<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function submit(Request $req){
       $validation = $req->validate([
           'name' => 'required|min:5|max:20',
           'surname' => 'required|min:3|max:20',
           'text' => 'required|min:10|max:255'
       ]);
    }

}
