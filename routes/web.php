<?php

use Illuminate\Support\Facades\Route;

Route::view('/','welcome');

Route::view('img','imagenes',[
    'num' => 505,
    'headers'=>[
        'Content-type'=>'image/jpeg',
        'size'=>rand(),
    ],
]);