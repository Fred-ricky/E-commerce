<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //Home
    public function home()
    {
        return view('Pages.home');
    }


    //cart
    public function cart()
    {
        return view('Pages.cart');
    }

}
