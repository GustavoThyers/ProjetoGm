<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\ManutencaoController;
use App\Http\Controllers\Admin\PedidosController;
use App\Http\Controllers\Admin\ProdutoController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\Frontend\CategoriaController as FrontendCategoriaController;
use App\Http\Controllers\Frontend\ManutencaoController as FrontendManutencaoController;
use App\Http\Controllers\Frontend\PedidosController as FrontendPedidosController;
use App\Http\Controllers\Frontend\ProdutosController as FrontendProdutosController;
use App\Http\Controllers\Frontend\WelcomeController as FrontendWelcomeController;







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

Route::get('/', [FrontendWelcomeController::class, 'index'])->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/categorias', [FrontendCategoriaController::class, 'index'])->name('categorias.index');

Route::get('/categorias/{categoria_slug}', [FrontendCategoriaController::class, 'show'])->name('categorias.show');
Route::get('/pedidos', [FrontendPedidosController::class, 'index'])->middleware(['auth', 'verified'])->name('pedidos.index');
Route::post('/pedidos', [FrontendPedidosController::class, 'store'])->name('pedidos.store');

Route::get('/manutencao', [FrontendManutencaoController::class, 'index'])->middleware(['auth', 'verified'])->name('manutencao.index');
Route::post('/manutencao', [FrontendManutencaoController::class, 'store'])->name('manutencao.store');
Route::get('/produtos', [FrontendProdutosController::class, 'index'])->name('produto.index');
Route::get('/carrinho', [CarrinhoController::class, 'carrinho'])->name('carrinho.index');
Route::post('/remover', [CarrinhoController::class, 'remove'])->name('carrinho.remove');
Route::post('/carrinho', [CarrinhoController::class, 'addcarrinho'])->name('carrinho.add');
Route::get('/produto/{id}', [FrontendProdutosController::class, 'detalhes'])->name('produto.detalhes');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('/categoria', CategoriaController::class);
    Route::resource('/users', UsersController::class);

    Route::resource('/manutencao', ManutencaoController::class);
    Route::resource('/pedidos', PedidosController::class);
    Route::resource('/produtos', ProdutoController::class);

});

require __DIR__.'/auth.php';
