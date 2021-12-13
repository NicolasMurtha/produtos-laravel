<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\SetorsController;
use App\Http\Controllers\CodsController;
use App\Http\Controllers\VendasController;

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

//controlador de produtos
Route::resource('/produtos', ProdutosController::class);

Route::resource('/setores', SetorsController::class);

Route::get('/excluidos', [ProdutosController::class, 'showDestroyed'])->name("produtos.excluidos");

Route::post('forceDestroy', [ProdutosController::class, 'forceDestroy'])->name('produtos.forceDestroy');

Route::get('restore/{id}', [ProdutosController::class, 'restore'])->name('produtos.restore');

Route::resource('/cod', CodsController::class);

Route::resource('/vendas', VendasController::class);

Route::post('produtos/pesquisa', [ProdutosController::class, 'pesquisa'])->name('produtos.pesquisa');

Route::get('index2', [ProdutosController::class, 'index2'])->name('indexJson');

