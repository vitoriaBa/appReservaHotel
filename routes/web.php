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

Route::get('/altera-cliente/{id}',[ClienteController::class,'mostrarGerenciarClienteId'])->name('mostrar-cliente');
Route::put('/altera-cliente/{id}',[ClienteController::class,'alterarClienteBanco'])->name('alterar-cliente');
Route::delete('/apaga-cliente/{id}',[ClienteController::class,'destroy'])->name('apaga-cliente');





//Funcionario
Route::get('/cadastro-funcionario',[FuncionarioController::class,'showFormularioCadastrofuncionario'])->name('show-formulario-cadastro-funcionario');
Route::post('/cadastro-funcionario',[FuncionarioController::class,'cadastrarFuncionario'])->name('envia-banco-funcionario');
Route::get('/gerenciar-funcionario',[FuncionarioController::class,'gerenciarFuncionario'])->name('gerenciar-funcionario');

Route::get('/altera-funcionario/{id}',[FuncionarioController::class,'mostrarGerenciarFuncionarioId'])->name('mostrar-funcionario');
Route::put('/altera-funcionario/{id}',[FuncionarioController::class,'alterarFuncionarioBanco'])->name('alterar-funcionario');
Route::delete('/apaga-funcionario/{id}',[FuncionarioController::class,'destroy'])->name('apaga-funcionario');


//quartos
Route::get('/cadastro-quartos',[QuartosController::class,'showFormularioCadastroQuarto'])->name('show-formulario-cadastro-quarto');
Route::post('/cadastro-quartos',[QuartosController::class,'cadastrarQuarto'])->name('envia-banco-quartos');
Route::get('/gerenciar-quartos',[QuartosController::class,'gerenciarQuarto'])->name('gerenciar-quartos');

Route::get('/altera-quartos/{id}',[QuartosController::class,'mostrarGerenciarQuartosId'])->name('mostrar-quartos');
Route::put('/altera-quartos/{id}',[QuartosController::class,'alterarQuartosBanco'])->name('alterar-quartos');
Route::delete('/apaga-quartos/{id}',[QuartosController::class,'destroy'])->name('apaga-quartos');



//Reserva
Route::get('/cadastro-reserva',[ReservasController::class,'showFormularioCadastroReserva'])->name('show-formulario-cadastro-reserva');
Route::post('/cadastro-reserva',[ReservasController::class,'cadastrarReserva'])->name('envia-banco-reservas');
Route::get('/gerenciar-reserva',[ReservasController::class,'gerenciarReserva'])->name('gerenciar-reserva');


Route::get('/altera-reserva/{id}',[ReservasController::class,'mostrarGerenciarReservaId'])->name('mostrar-reserva');
Route::put('/altera-reserva/{id}',[ReservasController::class,'alterarReservaBanco'])->name('alterar-reserva');
Route::delete('/apaga-reserva/{id}',[ReservasController::class,'destroy'])->name('apaga-reserva');
//
