<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about-jicf');
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

    public function venue()
    {
        return view('information.venue');
    }

    public function accommodation()
    {
        return view('information.accommodation');
    }

    public function socialActivity()
    {
        return view('information.social-activity');
    }

    public function aboutJakarta()
    {
        return view('information.about-jakarta');
    }
}