@extends('layout')
@section('content')
 
<section class="container mt-5">
<form class="row g-3" method="Post" action="{{route('envia-banco-quartos')}}">
  @csrf
<div class="col-md-12">
  
    <div class="col-md-6">
    <label for="inputNumero" class="form-label">Numero:</label>
    <input type="numeric" class="form-control" id="inputNumero" name="numeroquarto">
  </div>


  
  
  <select class="form-select" name="tipo" aria-label="Default select example">
  <option selected >Tipo:</option>
  <option value="classeA">classe A</option>
  <option value="Comercial">Comercial</option>
  <option value="Suite">Suite</option>
</select>


  <div class="col-md-6">
    <label for="inputvalor" class="form-label">Valor:</label>
    <input type="decimal" class="form-control" id="inputValor" name="valordiaria">
  </div>

  <div class="col-12" style="margin-top:3%;">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
<section>
@endsection