<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\OrderMailer;

class OrderMailController extends Controller
{
    public function order(Request $request)
    {

        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required|min:6',
        ]); 
        
        $email = \App\Setting::all();

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);
        }
        //$email[0]->email
        \Mail::to('r4n3@mail.ru')->send(new OrderMailer($request->phone, $request->name));    
        return response()->json(['message' => 'Сообщение успешно отправлено!']);
    }
}
