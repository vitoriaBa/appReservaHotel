@extends('layout')
@section('content')
 


<section c class="container mt-5">

<form class="row g-5" method="Post" action="{{route('envia-banco-quartos')}}">
  @csrf

  <h1>Formulario do Quarto </h1>
  <div class="row">
  
    <div class="col-md-3">
    <label for="inputNumero" class="form-label">Codigo Funcionario:</label>
    <input type="text" class="form-control" id="inputCodigoFuncionario" name="idfuncionario" >
  </div>


  <div class="col-md-4">
    <label for="inputNomeFuncionario" class="form-label">Nome:</label>
    <input type="texto" class="form-control" id="inputNomeFuncionario" name="nomefuncionario">
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    <label for="inputCodigoCliente" class="form-label">Codigo Cliente:</label>
    <input type="text" class="form-control" id="inputCodigoCliente" name="idcliente" >
  </div>


  <div class="col-md-4">
    <label for="inputNomeCliente" class="form-label">Nome:</label>
    <input type="text" class="form-control" id="inputNomeCliente name="nomecliente">
  </div>

</div>

<div class="row">
  <div class="col-md-3">
    <label for="inputNumeroQuarto" class="form-label">Numero do Quarto:</label>
    <input type="text" class="form-control" id="inputNumeroQuarto" name="numero">
  </div>
</div>
<div class="row">
   


  <div class="col-md-4">
    <label for="inputtipo" class="form-label">Tipo:</label>
    <input type="text" class="form-control" id="inputTipo" name="tipo">

  </div>
</div>
<div class="row"> 
  <div class="col-md-4">
    <label for="inputValorDiaria" class="form-label">Valor Diaria:</label>
    <input type="text" class="form-control" id="inputValorDiaria" readonly name="valor">
  </div>

</div>
<div class="row">

  <div class="col-md-4">
    <label for="inputDataEntrada" class="form-label">Data da Entrada</label>
    <input type="date" class="form-control" id="inputDataEntrada" name="dataentrada">
  </div>


  <div class="col-md-4">
    <label for="inputDataSaida" class="form-label">Data Saida</label>
    <input type="date" class="form-control" id="inputDataSaida" name="datasaida">
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    <label for="inputtipo" class="form-label">Situação de Pagamento</label>
    <select class="form-select" aria-label="Default select example">
  <option value="Pentente">Pentente</option>
  <option value="Pago">Pago</option>
 
</select>
  </div>

  <div class="col-md-4">
    <label for="inputValorTotal" class="form-label">Valor Total</label>
    <input type="text" class="form-control" id="inputValorTotal"  name="valortotal">
  </div>

</div>

  <div class="col-12" style="margin-top:3%;">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
<section>
@endsection