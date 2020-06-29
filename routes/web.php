<?php

use Illuminate\Support\Facades\Route;

//Route::get('/','PageController@inicio');


/*Route::view('frestorage','Frestorage');


Route::get('inicio','PageController@freini');

Route::get('login','PageController@login');*/



//Proyecto GoShopping
Route::get('admin/usuario','PageController@in')->name('usua');

Route::get('/', function(){return view('gameshop');})->name('game');

Route::post('admin/usuario', 'PageController@gua')->name('regis.guar');

Route::get('admin/juego', 'PageController@admin')->name('administrador');

Route::get('login','PageController@ini')->name('login');

Route::post('admin/juegos','PageController@crear')->name('juegos.ingresar');

Route::get('versi','PageController@game')->name('ver');


/*Route::get('regis', 'PageController@regis')->name('regist');

Route::get('recuperar', 'PageController@recup')->name('recup');

Route::get('ing-cont-nueva', 'PageController@newcont');



Route::view('img','imagenes',[
    'num' => 505,
    'headers'=>[
        'Content-type'=>'image/jpeg',
        'size'=>rand(),
    ],
]);

*/
