@extends('layout')
@section('content')
 
<section class="container mt-5">
<form class="row g-3" method="Post" action="{{route('envia-banco-cliente')}}">
  @csrf
<div class="col-md-6">
    <label for="inputNome" class="form-label">Nome:</label>
    <input type="text" class="form-control" id="inputNome" name="nome" placeholder="Paula da Silva">
  </div>
  <div class="col-md-7">
    <label for="inputEmail" class="form-label">E-mail:</label>
    <input type="email" class="form-control" id="inputEmail" name="email" placeholder="paulasilva@gmail.com.br">
  </div>
  <div class="col-3">
    <label for="inputFone" class="form-label">Telefone:</label>
    <input type="text" class="form-control" id="inputFone" name="fone" placeholder="11 5698-8988">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
<section>
@endsection