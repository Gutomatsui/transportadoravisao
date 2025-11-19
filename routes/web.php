<?php

use App\Http\Controllers\CategoriaRotinaController;
use App\Http\Controllers\CotacaoController;
use App\Http\Controllers\siteController;
use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RotinaController;
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
Route::get('',[siteController::class,'index'])->name('/');
Route::get('/a-empresa',[siteController::class,'sobre'])->name('a-empresa');
Route::get('/sassmaq',[siteController::class,'sassmaq'])->name('sassmaq');
Route::get('/servicos',[siteController::class,'servicos'])->name('servicos');
Route::get('/frota',[siteController::class,'frota'])->name('frota');
Route::get('/clientes',[siteController::class,'clientes'])->name('clientes');
Route::get('/cotacao',[siteController::class,'cotacao'])->name('cotacao');
Route::get('/localizacao',[siteController::class,'localizacao'])->name('localizacao');


Route::get('cotacoes/create', [CotacaoController::class, 'create'])->name('cotacoes.create');
Route::post('cotacoes', [CotacaoController::class, 'store'])->name('cotacoes.store');
Route::get('cotacao/listar',[CotacaoController::class, 'listar'])->middleware();
Route::get('cotacao/ver/{id}',[CotacaoController::class, 'ver'])->middleware();
Route::get('/cotacoes/novas', [CotacaoController::class, 'novasCotacoes']);
Route::post('/cotacoes/marcar-visualizadas', [CotacaoController::class, 'marcarVisualizadas']);

Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('send.email');
Route::get('cotacao/emails/{id}', [EmailController::class, 'verEmails'])->name('cotacao.emails');
Route::post('orcamento/buscar', [CotacaoController::class, 'buscar'])->name('orcamento.buscar');

Route::get('/download-arquivo/{cotacao}', [CotacaoController::class, 'baixarArquivo'])->name('cotacoes.download');

Route::get('/rotinas/categoria/listar', [CategoriaRotinaController::class, 'index'])->name('categorias_rotina.index');
Route::get('/rotinas/categoria/create', [CategoriaRotinaController::class, 'create'])->name('categorias_rotina.create');
Route::post('/rotinas/categoria/store', [CategoriaRotinaController::class,'store'])->name('categorias_rotina.store');
Route::delete('/categoria/delete/{id}', [CategoriaRotinaController::class, 'destroy'])->name('categorias_rotina.destroy');

// --- ROTAS CORRIGIDAS PARA ROTINAS ---
// Utilize Route::resource para gerenciar todas as operações CRUD para 'rotinas'.
// Isso evitará duplicação e conflitos.
// As URLs geradas serão:
// - GET    /rotinas             (rotinas.index)
// - GET    /rotinas/create      (rotinas.create)
// - POST   /rotinas             (rotinas.store)
// - GET    /rotinas/{rotina}    (rotinas.show - se você não precisa, pode excluí-lo, veja abaixo)
// - GET    /rotinas/{rotina}/edit (rotinas.edit)
// - PUT/PATCH /rotinas/{rotina} (rotinas.update)
// - DELETE /rotinas/{rotina}    (rotinas.destroy)

Route::get('/rotinas/listar', [RotinaController::class, 'index'])->name('rotinas.index');

// Rota para exibir o formulário de criação
Route::get('/rotinas/create', [RotinaController::class, 'create'])->name('rotinas.create');

// Rota para salvar a nova rotina (onde o formulário POSTa)
Route::post('/rotinas', [RotinaController::class, 'store'])->name('rotinas.store');

/// Rota para mostrar o formulário de edição
Route::get('/rotinas/{rotina}/edit', [RotinaController::class, 'edit'])->name('rotinas.edit');

// Rota para atualizar uma rotina (use PUT ou PATCH para atualizações)
Route::put('/rotinas/{rotina}', [RotinaController::class, 'update'])->name('rotinas.update');

// Rota para deletar uma rotina
Route::delete('/rotinas/{rotina}', [RotinaController::class, 'destroy'])->name('rotinas.destroy');

// --- NOVAS ROTAS PARA O FRONTEND DE ROTINAS ---
Route::get('/rotinas', [siteController::class, 'rotinasIndex'])->name('rotinas.site.index');
Route::get('/rotinas/{rotina}', [siteController::class, 'rotinaShow'])->name('rotinas.site.show');



Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
