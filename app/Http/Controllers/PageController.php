<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class PageController extends Controller
{


  


    public function ini(){
    return view('usu');
    }

    public function gua(Request $request){
        $usuario = new App\Usuario();
        $usuario ->nombre = $request -> nombre;
        $usuario ->correo = $request -> correo;
        $usuario ->contraseña = $request -> contraseña;
        $usuario ->save();
        return view('login');
    }


    public function in(){
        $usuario = App\Usuario::all();
        return view('usuarios',compact('usuario'));
    }
    
    public function crear(Request $request){

        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/imagenes/',$name);
          
        }
        $game = new App\Juego();
        $game ->nombre = $request ->nombre;
        $game ->descripcion = $request ->descripcion;
        $game ->precio = $request ->precio;
        $game->imagen=$request = $name;
        $game->save();
        return back();
    }

    public function admin(){
        return view('administrador');
    }
  

public function game(){
    $games = App\Juego::paginate(4);
    return view('ver',compact('games'));
}


    /*public function inicio(){
        return view('welcome');

    }

    public function freini(){
        return view('inicio');
    }

    public function login(){
        return view('login');
    }*/
    
}