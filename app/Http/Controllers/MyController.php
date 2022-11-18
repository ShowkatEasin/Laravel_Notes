<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    

    function welcome(){
        return view ("welcome");
    }

    function xyz(){
        return view ("osman");
    }

   
}
