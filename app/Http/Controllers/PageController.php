<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function registration()
    {
        return view('registration');
    }

    public function agenda()
    {
        return view('agenda');
    }

    public function contact()
    {
        return view('contact');
    }

    public function aboutHost()
    {
        return view('information.about-host');
    }

    public function aboutJakarta()
    {
        return view('information.about-jakarta');
    }

    public function accommodation()
    {
        return view('information.accommodation');
    }

    public function socialActivity()
    {
        return view('information.social-activity');
    }

    public function venue()
    {
        return view('information.venue');
    }
}