<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function welcome(){
        return view('index');
    }

    public function mess(){
        return view('message');
    }
    public function student(){
        return view('student');
    }
    public function book(){
        return view('book');
    }
    public function addbook(){
        return view('addbook');
    }
    public function requests(){
        return view('requests');
    }
    public function recommendations(){
        return view('recommendations');
    }
    public function current(){
        return view('current');
    }
    public function logout(){
        return view('logout');
    }
}
