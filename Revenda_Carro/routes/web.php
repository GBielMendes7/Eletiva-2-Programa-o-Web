<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContatosController;
use App\Http\Controllers\EstoqueController;
use App\Http\Controllers\VeiculoManagerController;
use App\Http\Controllers\VendedorManagerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ComentariosController;
use App\Http\Controllers\loginController;
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

// Route::get('/', function () {
//     return view('site.home');
// })->name('site.home');
// Route::get('/cursos', function () {
//     return view('site.cursos');
// })->name('site.curso');
// Route::get('/contatos', function () {
//     return view('site.contatos');
// })->name('site.contatos');

Route::get('/',[HomeController::class,'index'])->name('site.home');

Route::get('/estoque', [EstoqueController::class, 'index'])->name('site.estoque');

Route::get('/contatos', [ContatosController::class, 'index'])->name('site.contatos');
Route::post('/contatos', [ContatosController::class, 'store'])->name('site.contatos');

Route::resource('/veiculomanager', VeiculoManagerController::class);

Route::resource('/vendedormanager', VendedorManagerController::class);

Route::get('/login', [LoginController::class, 'index'])->name('site.login');

Route::resource('/comentarios', ComentariosController::class);