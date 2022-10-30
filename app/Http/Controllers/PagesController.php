<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() 
    {
        return view('index-classic');
    }

    public function faq()
    {
        return view('content.faq');
    }

    public function about()
    {
        return view('content.about');
    }

}
