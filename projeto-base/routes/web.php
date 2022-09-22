<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;

// Route::get('categoria', [CategoriaController::class, 'Index']);

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
Route::get('cliente', 'App\Http\Controllers\ClienteController@Index'); 
Route::post('/cliente/inserir','App\Http\Controllers\ClienteController@store');

Route::get('categoria', 'App\Http\Controllers\CategoriaController@Index'); 
Route::post('/categoria/inserir','App\Http\Controllers\CategoriaController@store');


Route::get('/produto', function () {   
    return view('produto');
});

Route::get('/pedido', function () {   
    return view('pedido');
});