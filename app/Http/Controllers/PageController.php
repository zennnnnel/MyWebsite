<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // HOME PAGE
    public function home()
    {
        return view('home');
    }

    // ABOUT PAGE
    public function about()
    {
        return view('about');
    }

    // GALLERY PAGE
    public function gallery()
    {
        return view('gallery');
    }
}
