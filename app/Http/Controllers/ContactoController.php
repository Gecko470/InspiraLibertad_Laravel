<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Exception;
use Illuminate\Http\Request;
use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{

    public function index()
    {
        return view('contacto');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required | min:10',
            'email' => 'required | email',
            'message' => 'required | max:300'
        ]);

        Message::create($request->all());

        $email = new ContactoMailable($request->all());
        Mail::to('codeworks9@gmail.com')->send($email);

        return redirect()->route('contacto')->with("success", __('Mensaje enviado!'));
    }
}
