<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function inicio(){
        return view('welcome');

    }

    public function ini($in = null){
        $irc = ['iniciar','crear','recuperar'];
///return view('ini-sec',['irc' => $irc]);
return view('ini-sec',compact('irc','in'));
}   

    

    public function regis(){
    return view('regis');
        
    }

    public function recup(){
        return view('recu-cuent');
    }

    public function newcont(){
        return view('contra-recu');
    }
}