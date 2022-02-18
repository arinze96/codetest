<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{


    public function index(Request $request)
    {

        return view("home.index");
    }

    public function register(Request $request)
{
   
        return view("auth.signup");

}


public function login(Request $request)
{
   
        return view("auth.login");

}

}



