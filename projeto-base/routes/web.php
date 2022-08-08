<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
//Route é um classe, que esta sendo acessado pelo metodo get, que está recebendo dois parametros
Route::get('/cliente', function () {   
    return view('cliente');
});

Route::get('/categoria', function () {   
    return view('categoria');
});

Route::get('/produto', function () {   
    return view('produto');
});

Route::get('/pedido', function () {   
    return view('pedido');
});