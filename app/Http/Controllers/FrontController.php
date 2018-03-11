<?php

namespace App\Http\Controllers;

class FrontController extends Controller
{
    public function __invoke(){
        if (!session('status')){
            return redirect()->route('home');
        }
        return view('login');
    }
}
