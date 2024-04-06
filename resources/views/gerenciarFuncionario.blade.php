
@extends('layout')
@section('content')
 

<section class="container m-5">
<h1 class='text-center'>Gerenciar dados do Funcionario</h1>
  <div class="container m-5">
  <form method='get' action="{{route('gerenciar-funcionario')}}">

    @csrf

      <div class="row center">
        <div class="col">
          <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite o nome do funcionario" aria-label="First name">
        </div>
        <div class="col">
          <button type="submit" class="btn btn-info">pesquisar</button>
        </div>
      </div>
</form>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Nome</th>
        <th scope="col">Função</th>
        <th scope="col">Editar</th>
        <th scope="col">Excluir</th>
      </tr>
    </thead>
    <tbody>
   
    @foreach($registrosFuncionarios  as  $registrosFuncionariosLoop)
      <tr>
        <th scope="row">{{$registrosFuncionariosLoop->id}}</th>
        <td>{{$registrosFuncionariosLoop->nome}}</td>
        <td>{{$registrosFuncionariosLoop->funcao}}</td>
      
        <td>
        <a href="{{route('mostrar-funcionario',$registrosFuncionariosLoop->id)}}">
            <button type="submit" class="btn btn-primary">altera</button>
          </a>
        </td>
        <td>
          <form method='post'action="{{route('apaga-funcionario',$registrosFuncionariosLoop->id)}}">
       @method('delete')
            @csrf
            <button type="submit" class="btn btn-primary">X</button>
               
        </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</section>
@endsection