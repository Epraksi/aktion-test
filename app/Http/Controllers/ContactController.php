<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contacts', ['datas' => \App\Contact::all()[0]]);
    }
}
