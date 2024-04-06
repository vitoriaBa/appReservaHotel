@extends('layout')
@section('content')

<section class="container mt-5">
<form class="row g-3" method="Post" action="{{route('alterar-funcionario', $registrosFuncionarios->id)}}">
@method('put')  
@csrf
<div class="col-md-6">
    <label for="inputNome" class="form-label">Nome:</label>
    <input type="text" class="form-control" id="inputNome" name="nome" value="{{old('nome', $registrosFuncionarios->nome)}}" placeholder="Paula da Silva">
    @error('nome')
    <div class='text-sm-start text-light'>*Prenceher o campo  nome</div>
    @enderror
</div>

<div class="col-md-6">
    <label for="inputEmail" class="form-label">Função:</label>
    <input type="text" class="form-control" id="inputFuncao" name="funcao" value="{{old('funcao', $registrosFuncionarios->funcao)}}" placeholder="Secretaria">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
<section>
@endsection