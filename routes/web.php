<?php

use Illuminate\Support\Facades\Route;

Route::get('/','PageController@inicio');



Route::get('ini/{in?}', 'PageController@ini')->name('formu');

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
