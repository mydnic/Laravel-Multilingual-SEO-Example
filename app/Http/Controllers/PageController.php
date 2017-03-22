<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function getAboutPage()
    {
        return view('about');
    }
}
