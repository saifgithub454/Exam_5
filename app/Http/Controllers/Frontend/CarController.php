<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarController extends Controller
{
    function bookcar(){

        return view('frontend.components.bookcar');
    }

}
