<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    
    function abc(){
        return view ("showkat");
    }

    function abm(){
        return view ("welcome");
    }

    function xyz(){
        return view ("osman");
    }

   
}
