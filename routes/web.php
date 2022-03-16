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


Route::get('/contato',['as'=>'contato','uses'=>'Controller@index']);
Route::get('/contato/adicionar',['as'=>'contato.adicionar','uses'=>'Controller@adicionar']);
Route::post('/contato/salvar',['as'=>'contato.salvar','uses'=>'Controller@salvar']);
Route::get('/contato/editar/{id}',['as'=>'contato.editar','uses'=>'Controller@editar']);
Route::put('/contato/atualizar/{id}',['as'=>'contato.atualizar','uses'=>'Controller@atualizar']);
Route::get('/contato/deletar/{id}',['as'=>'contato.deletar','uses'=>'Controller@deletar']);
