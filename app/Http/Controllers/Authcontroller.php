<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Authcontroller extends Controller
{
 

    function login()
    {
        return view("auth.login");
    }

    function register()
    {
        return view("auth.register");
    }

    function welcome(){
        return view( "welcome-taskmate");

    }

      
}
