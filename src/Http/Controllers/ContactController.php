<?php

namespace Pranjal\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Pranjal\Contact\Models\Contact;
use Pranjal\Contact\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');    //first'contact'is pkg name and second'contact' is views name.

    }

    public function send(Request $request)
    {
        Mail::to('pranjal@gmail.com')->send(new ContactMailable($request->message,$request->name));
        Contact::create($request->all());
        return redirect(route('contact'));
        
    }
}