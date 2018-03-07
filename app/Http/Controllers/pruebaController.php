<?php

namespace App\Http\Controllers;


class pruebaController extends Controller
{
  
    public function index(){
        return "HOla";
    }
    public function nombre($nombre){
        return "HOla desde eel controladro ".$nombre;
    }
}
