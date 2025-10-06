<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function about()
    {
        return view ('about');
    }

    public function registration()
    {
        return view ('registration');
    }
    public function agenda()
    {
        return view ('agenda');
    }
    public function information()
    {
        return view ('information');
    }
    public function contact()
    {
        return view ('contact');
    }
}
