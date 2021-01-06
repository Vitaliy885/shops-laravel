<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;


class ContactController extends Controller
{

    public function submit(ContactRequest $req){

        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->surname = $req->input('surname');
        $contact->message = $req->input('text');

        $contact->save();

        return redirect()->route('contact')->with('success', 'Сообщение было добавлено');

    }

    public function allData(){
        $contact = new Contact();
        return view('pages.messages', [ 'data' => $contact->orderBy('id','DESC')->get()] );
    }

    public function showMessage($id){
        $contact = new Contact();
        return view('pages.show-message', [ 'data' => $contact->find($id)] );
    }

}
