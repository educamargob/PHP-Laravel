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
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProdutoController;

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/clientes/novo', [ClientesController::class, 'cadastro_novo']);
Route::post('/clientes/novo',[ClientesController::class, 'novo'])->name('clientes_novo');
Route::get('/clientes/listar', [ClientesController::class, 'listar'])->name('clientes_listar');

Route::get('/categoria/novo', [CategoriaController::class, 'categoria_nova']);
Route::post('/categoria/novo', [CategoriaController::class, 'novo'])->name('categoria_nova');
Route::get("categoria/listar", [CategoriaController::class, 'listar'])->name('categoria_listar');

Route::get('/produto/novo', [ProdutoController::class, 'produto_novo']);
Route::post('/produto/novo', [ProdutoController::class, 'novo'])->name('produto_novo');
Route::get("produto/listar", [ProdutoController::class, 'listar'])->name('produto_listar');

Route::get("categoria/{Tecnologia}", [ProdutoController::class, 'listar'])->name('produto_categoria_listar');
Route::get("categoria/Casa", [ProdutoController::class, 'listar'])->name('produto_categoria_listar');
Route::get("categoria/Lazer", [ProdutoController::class, 'listar'])->name('produto_categoria_listar');
Route::get("categoria/Bem Estar", [ProdutoController::class, 'listar'])->name('produto_categoria_listar');