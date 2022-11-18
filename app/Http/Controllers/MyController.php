<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    

    function abc(){
        return view ("welcome");
    }


    function abd(){
        return view ("showkat");
    }

   
}
