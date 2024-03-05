<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('categoria', 'App\Http\Controllers\categoriaController@getCategoria');

Route::get('categoria/{id}', 'App\Http\Controllers\categoriaController@getCategoriaById');//! El parametro debe llamarse igual a como se tiene en la funcion del controlador

Route::post('addCategoria', 'App\Http\Controllers\categoriaController@addCategoria');

Route::put('updateCategoria/{id}', 'App\Http\Controllers\categoriaController@updateCategoria');

Route::delete('deleteCategoria/{id}','App\Http\Controllers\categoriaController@deleteCategoria');

