<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {      
        return view('welcome', [
            'banner' => \App\Banner::all()[0],
            'choice' => \App\Choice::all(),
            'advantages' => \App\Advantage::all(),
            'promos' => \App\Promo::all()[0],
            'partners' => \App\Partner::all(),
            'news' => \App\News::orderBy('id', 'desc')->take(2)->get()
        ]);
    }
}
