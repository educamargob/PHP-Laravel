<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProdutosController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/clientes/novo', [ClientesController::class, 'cadastro_novo']);
    Route::post('/clientes/novo', [ClientesController::class, 'novo'])->name('clientes_novo');
    Route::get('/clientes/listar', [ClientesController::class, 'listar'])->name('clientes_listar');
    
    Route::middleware('verifica.nivel')->group(function () {
        Route::middleware('verifica.idade')->group(function () {
            Route::get('/clientes/alterar/{id}', [ClientesController::class, 'alterar'])->name('clientes_alterar');
            Route::post('/clientes/alterar/', [ClientesController::class, 'salvar'])->name('clientes_salvar');
            Route::get('/clientes/excluir/{id}', [ClientesController::class, 'excluir'])->name('clientes_excluir');
        });
        Route::get('/produtos/novo', [ProdutosController::class, 'cadastro'])->name('produtos_novo');
        Route::post('produtos/novo', [ProdutosController::class, 'novo'])->name('produtos_salvar');

        Route::get('/produtos/listar', [ProdutosController::class, 'listar'])->name('produtos_listar');
        Route::get('/produto/{slug}', [ProdutosController::class, 'exibir'])->name('produtos_exibir');
    });
});

require __DIR__.'/auth.php';
