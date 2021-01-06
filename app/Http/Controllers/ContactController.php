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

    public function deleteMessage($id){
        Contact::find($id)->delete();
        return redirect()->route('contact-data')->with('success', 'Сообщение было удалено');
    }

    public function updateMessage($id){
        $contact = new Contact();
        return view('pages.update-message', [ 'data' => $contact->find($id)] );
    }

    public function updateMessageSubmit($id, ContactRequest $req){
        $contact = Contact::find($id);
        $contact->name = $req->input('name');
        $contact->surname = $req->input('surname');
        $contact->message = $req->input('text');

        $contact->save();

        return redirect()->route('contact-data-message', $id)->with('success', 'Сообщение было обновлено');
    }

}
