<?php

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
    return view('home');
});

// Route::get('/nota/{chave}', function ($chave) {
//     // return view('nota', ['chave' => $chave]);
//     return view('nota')->with('chave', $chave);
// });


//Route::get('/nota/{chave}', ['uses' =>'NotaController@show', 'as'=>'routeNota']);
Route::get('/nota/salvar', 'NotaController@salvarNotas')->name('routeSalvarNotas');
Route::get('/nota', 'NotaController@buscarNota')->name('routeBuscarNota');
