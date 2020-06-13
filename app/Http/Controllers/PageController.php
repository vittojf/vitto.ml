<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function inicio(){
        return view('welcome');

    }

    public function iniciar(){
        return view('ini-sec');
    }

    public function regis(){
    return view('regis');
        
    }

    public function recup(){
        return view('recu-cuent');
    }
}