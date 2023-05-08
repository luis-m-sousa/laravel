<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', () {
    return view('home');
});

Route::get('/sobre', function () {
    return view('about');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/contato', function () {
    return view('contact');
});

Route::get('/detalhes-portfolio', function () {
    return view('portfolio-detais');
});

Route::get('/resumo', function () {
    return view('resume');
});

Route::get('/teste', function(){
    return view('index');
}
);