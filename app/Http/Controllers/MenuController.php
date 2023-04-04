<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{

    public function home()
    {
        return view('menu.home');
    }


    public function about()
    {
        return view('menu.about');
    }
    //Last Line
}
