<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMailer;

class ContactMailController extends Controller
{
    public function send(Request $request)
    {

        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|min:6',
            'text' => 'required|min:6',
        ]); 
        
        $email = \App\Setting::all();

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);
        }
        //$email[0]->email
        \Mail::to('r4n3@mail.ru')->send(new ContactMailer($request->name, $request->email, $request->text));    
        return response()->json(['message' => 'Сообщение успешно отправлено!']);
    }
}
