<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function inicio(){
        return view('welcome');

    }

    public function freini(){
        return view('inicio');
    }

    public function login(){
        return view('login');
    }
}