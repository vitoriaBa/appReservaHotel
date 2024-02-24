<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[ClienteController::class,'showHome'])->name('home');
Route::get('/cadastro-cliente',[ClienteController::class,'showFormularioCadastro'])->name('show-formulario-cadastro');
Route::post('/cadastro-cliente',[ClienteController::class,'cadastrarCliente'])->name('envia-banco-cliente');

Route::get('/cadastro-funcionario',[ClienteController::class,'showFormularioCadastrofuncionario'])->name('show-formulario-cadastro-funcionario');
Route::post('/cadastro-funcionario',[ClienteController::class,'cadastrarFuncionario'])->name('envia-banco-funcionario');