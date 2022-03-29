<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    //
//    public function submit() {
//        return "Okey from app/Http/Controllers/ContactController.php";
//    }

//    public function submit(Request $request) {
    public function submit(ContactRequest $request)
    {
//        dd($request);

//        dd($request->input('subject'));

//        $validation = $request->validate([
//            'subject' => 'required|min:5|max:50',
//            'message' => 'required|min:15|max:500'
//        ]);
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');
        $contact->status_active = $request->input('status_active');

        $contact->save();

        return redirect()->route('home')->with('success', 'Сообщение было добавлено');
    }

    public function allData()
    {
        $contact = new Contact;
//        $contact = Contact::all();
//        dd($contact->all());
//        dd(Contact::all());
//        return view('messages', ['data' => Contact::all()]);
//        return view('messages', ['data' => $contact->inRandomOrder()->get()]);
//        return view('messages', ['data' => $contact->orderBy('id', 'desc')->skip(2)->take(2)->get()]);
//        return view('messages', ['data' => $contact->where('subject', '<>', 'Hello')->get()]);
        return view('messages', ['data' => $contact->all()]);
    }

    public function showOneMessage($id)
    {
        $contact = new Contact;
        return view('one-message', ['data' => $contact->find($id)]);
    }

    public function updateMessage($id)
    {
        $contact = new Contact;
        return view('update-message', ['data' => $contact->find($id)]);
    }

    public function updateMessageSubmit($id, ContactRequest $request)
    {
        $contact = Contact::find($id);
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');
        $contact->status_active = $request->input('status_active');
        $contact->save();
        return redirect()->route('contact-data-one', $id)->with('success', 'Сообщение было обновлено');
    }

    public function deleteMessage($id)
    {
        Contact::find($id)->delete();
        return redirect()->route('contact-data')->with('success', 'Сообщение было удалено');

    }

}
