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

Route::get('/', [VariaveisController::class, 'index'] );

Route::get('/sobre', [VariavelController::class, 'about'] );

Route::get('/portfolio', [VariavelController::class, 'portfolio'] );

Route::get('/contato', [VariavelController::class, 'contact'] );


Route::get('/resumo', [VariavelController::class, 'resume'] );
