<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function home(){

        return view('frontend.components.home');
    }

    function about(){
        return view('frontend.components.about');
    }

    function contact(){
        return view('frontend.components.contact');
    }
}
