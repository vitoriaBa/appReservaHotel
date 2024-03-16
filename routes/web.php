<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\QuartosController;
use App\Http\Controllers\ReservasController;

Route::get('/',[ClienteController::class,'showHome'])->name('home');
//Cliente
Route::get('/cadastro-cliente',[ClienteController::class,'showFormularioCadastro'])->name('show-formulario-cadastro');
Route::post('/cadastro-cliente',[ClienteController::class,'cadastrarCliente'])->name('envia-banco-cliente');
Route::get('/gerenciar-cliente',[ClienteController::class,'gerenciarCliente'])->name('gerenciar-cliente');

Route::get('/altera-cliente',[ClienteController::class,'mostrarGerenciarClienteId'])->name('mostrar-cliente');
Route::put('/altera-cliente/{id}',[ClienteController::class,'alterarClienteBanco'])->name('alterar-cliente');
Route::delete('/apaga-cliente/{id}',[ClienteController::class,'destroy'])->name('apaga-cliente');


//Funcionario
Route::get('/cadastro-funcionario',[FuncionarioController::class,'showFormularioCadastrofuncionario'])->name('show-formulario-cadastro-funcionario');
Route::post('/cadastro-funcionario',[FuncionarioController::class,'cadastrarFuncionario'])->name('envia-banco-funcionario');
Route::get('/gerenciar-funcionario',[FuncionarioController::class,'gerenciarFuncionario'])->name('gerenciar-funcionario');
//sem professor

//quartos
Route::get('/cadastro-quartos',[QuartosController::class,'showFormularioCadastroQuarto'])->name('show-formulario-cadastro-quarto');
Route::post('/cadastro-quartos',[QuartosController::class,'cadastrarQuarto'])->name('envia-banco-quartos');
Route::get('/gerenciar-quartos',[QuartosController::class,'gerenciarQuarto'])->name('gerenciar-quartos');

//talves tenha que tirar
//Reserva
Route::get('/cadastro-reserva',[ReservasController::class,'showFormularioCadastroReserva'])->name('show-formulario-cadastro-reserva');
Route::post('/cadastro-reserva',[ReservasController::class,'cadastrarReserva'])->name('envia-banco-reservas');
Route::get('/gerenciar-reserva',[ReservasController::class,'gerenciarReserva'])->name('gerenciar-reserva');
//
