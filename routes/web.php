<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//route::get('/test', function () {
//return "BIENVENIDO";
//});

//Route::get('/test', function () {
  //  return view('test');
//});


//Route::get('/crud', function () {
  //  $age = 33;
//    $data = ['name' => 'andres', 'age' => $age];

//    return view('crud/index', $data);
//})->name('crud');



//Route::get('/contact1', function () {
    //return redirect()->route('contact2'); REDIRECCION 


 //   return view('contact1', ['name' => 'Andres']);
//})->name('contact1');



//Route::get('/contact2', function () {
//    return view('contact2');
//})->name('contact2');
