<?php

namespace App\Http\Controllers;
use Auth;

class FrontController extends Controller
{
    public function __invoke(){
        if (Auth::check()) {
            return redirect('home');
        }else{
            return view('auth.login');
        }
    }
}
