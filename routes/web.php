<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChamadoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CidadeController;



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






Route::group(['prefix' => 'chamado'], function(){
    
    

    Route::get('criar', function(){
        return "criar chamado";
    });

    
    Route::get('buscar', function(){
        return "buscar chamado";
    });

    Route::get('excluir', function(){
        return "excluir chamado";
    });

    Route::get('atualizar', function(){
        return "atualizar chamado";
    });
    
});

Route::resource('login', LoginController::class);

Route::resource('chamado', ChamadoController::class);

Route::resource('produto', ProdutoController::class);

Route::resource('cidade', CidadeController::class);