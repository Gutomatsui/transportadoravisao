<?php

use App\Http\Controllers\CotacaoController;
use App\Http\Controllers\siteController;
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
Route::get('/',[siteController::class,'index']);
Route::get('/a-empresa',[siteController::class,'sobre']);
Route::get('/sassmaq',[siteController::class,'sassmaq']);
Route::get('/servicos',[siteController::class,'servicos']);
Route::get('/frota',[siteController::class,'frota']);
Route::get('/clientes',[siteController::class,'clientes']);
Route::get('/cotacao',[siteController::class,'cotacao']);

// Rota para exibir o formulário de criação
Route::get('cotacoes/create', [CotacaoController::class, 'create'])->name('cotacoes.create');

// Rota para salvar a nova cotação
Route::post('cotacoes', [CotacaoController::class, 'store'])->name('cotacoes.store');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
