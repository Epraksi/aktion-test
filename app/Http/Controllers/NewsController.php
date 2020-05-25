<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show($id)
    {
        return view('news_inner_page', [
            'datas' => \App\News::find($id)
        ]);
    }
}
