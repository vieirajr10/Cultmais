<?php

use Illuminate\Support\Facades\Route;
use App\Models\Local;
use App\Models\Regiao;
use App\Models\Categoria;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LocalController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CurtidaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\RegiaoController;
use App\Http\Controllers\RankingController;
use App\Http\Controllers\AlterarLocalController;

Route::get('/login', [LoginController::class, 'index'])->name('login.form');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/auth', [LoginController::class, 'store'])->name('login.auth');
Route::get('/locais', [LocalController::class, 'index'])->name('local.store');

Route::post('/curtir/{localId}', [CurtidaController::class, 'curtir'])->name('curtida.curtir');
Route::get('/filter-by-category/{categoryId}', [HomeController::class, 'filterByCategory'])->name('filterByCategory');
Route::get('/filter-by-region/{regionID}', [HomeController::class, 'filterByRegion'])->name('filterByRegion');
Route::get('/recentes', [HomeController::class, 'showRecentes'])->name('recentes');

Route::get('/user/novo', [UserController::class, 'create'])->name('user.create');

Route::post('/user', [UserController::class, 'store'])->name('user.store');


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('root');


Route::post('/cadastrar/usuario/{id}', [AdminController::class, 'cadastrarUsuario'])->name('cadastrar.usuario');
Route::delete('/excluir/usuario/{id}', [AdminController::class, 'excluirUsuario'])->name('excluir.usuario');


Route::middleware(['auth', 'checkUserSituation'])->group(function () {
    Route::get('/locais/novo', [LocalController::class, 'create'])->name('local.create'); 

    Route::post('/locais', [LocalController::class, 'store'])->name('local.store');

});

Route::middleware(['auth', 'checkAdminSituation'])->group(function () {

    Route::get('/listar/usuarios', [AdminController::class, 'listarUsuarios'])->name('listar.usuarios');

    Route::get('/excluir/usuarios', [AdminController::class, 'ExcluirUsuarios'])->name('excluir.usuarios');

    Route::get('/locais/{localId}/alterar', function ($localId) {
        $local = Local::find($localId);
        $regioes = Regiao::all();
        $categorias = Categoria::all();
        return view('form.alterar_local', compact('local', 'regioes', 'categorias'));
    })->name('alterar.create');
    

    Route::post('/local/{localId}/alterar', [AlterarLocalController::class, 'store'])->name('alterar.store');

    Route::get('/local/excluir/{localId}', [AlterarLocalController::class, 'excluir'])->name('local.excluir');
});

Route::get('/inserir-categoria', [CategoriaController::class, 'inserirCategoria'])->name('cadastrar.categoria');

Route::get('/inserir-regiao', [RegiaoController::class, 'inserirRegiao'])->name('cadastrar.regiao');

Route::post('/curtir', [CurtidaController::class, 'curtir'])->name('cadastrar.curtida');    

Route::get('/categorias', [LocalController::class, 'categoria'])->name('categorias.index');

Route::get('/locais/{id}', [LocalController::class, 'show'])->name('local.show');

Route::delete('/remover-curtida/{id}', [CurtidaController::class, 'removerCurtida'])->name('remover.curtida');

Route::get('/atualizar-locais', [CurtidaController::class, 'curtir'])->name('atualizar.locais');

Route::get('/empresa/{id}', [UserController::class, 'show'])->name('user.show');







