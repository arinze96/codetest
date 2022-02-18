<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class UserController extends Controller
{


    public function index(Request $request)
    {

        return view("home.index");
    }

    public function register(Request $request)
    {
        if ($request->method() == "GET") {
            // if (!empty($request->user()->id)) {
            //     return redirect()->route('user.login');
            // }
            return view("auth.signup");
        }
        $data = (object) $request->all();

        $validated =  $request->validate([
            "fullname" => ["required"],
            "email" => ["required", "unique:users,email"],
            "password" => ["required", "between:6,15"]
        ]);

       if($validated){
        User::create([
            "fullname" => $data->fullname,
            "email" => $data->email,
            "password" => Hash::make($data->password),
        ]);
    }
    return  redirect()->route('app.home');
            
        
    }


 public function login(Request $request)
    {


        if ($request->method() == "GET") {
            // if (!empty($request->user()->id)) {
            //     return redirect()->route('app.home');
            // }
            return view("auth.login");
        }
        $data = (object) $request->all();

        $validated =  $request->validate([
            "email" => ["required"],
            "password" => ["required"]
        ]);

        $user = User::where("email", "=", "{$data->email}")->get()->first();
      
        if ($user && Hash::check($data->password, $user->password)) {
          
            Auth::loginUsingId($user->id);
            $route =  "app.home";
            return redirect()->route($route);
        } else {
            return view("auth.login", ["noMatch" => "Invalid Login Detail"]);
        }
    }
}



