<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function about()
    {
        return view('front.about');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function message()
    {
        return view('front.message');
    }


    public function message2()
    {
        return view('front.message2');
    }

    public function faq()
    {
        return view('front.faq');
    }
}
