<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller{
	public function login(){
        return view('Auth.login');
    }
    public function register(){
        return view('Auth.register');
    }

    public function monitor(){
        return view('monitor');
    }
    public function input(){
        return view('input');
    }

}
