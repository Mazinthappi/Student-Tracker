<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Student;


class LoginController extends Controller
{
    public function login(){
        return view('students.login');
    }
    public function dologin(){
        $input=[
            'email'=>request('email'),
            'password'=>request('password'),
        ];
        if(auth()->attempt($input,true)){
            return redirect()->route('home') ;
        }
        else{
            return redirect()->route('login')->with('message','login failed');
        }
    }
    public function dologout(){
        auth()->logout();
        return redirect()->route('login');
    }
}
