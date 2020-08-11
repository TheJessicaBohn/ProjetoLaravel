@extends('templates.template')

@section('content')
<div class="content">
<div class="title m-b-md">SoiticFlix</div>
<div class="text-center mt-3 mb-4" ></div>
   <a href="">
      <button class="btn btn-success">Cadastrar</button>
   </a>
<div class="col-8 m-auto" >
<table class="table text-center">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Título</th>
      <th scope="col">Diretor</th>
      <th scope="col">Duração</th>
      <th scope="col">País</th>
      <th scope="col">Lançamento</th>
      <th scope="col">Cadastro</th>
      <th scope="col">Opções    </th>

    </tr>
  </thead>
  <tbody>
  @foreach($filme as $filmes)
  @php
  $diretores= $filmes->find($filmes->id)->relDiretores
  @endphp

  <tr>
      <th scope="row"> {{$filmes->id}}</th>
      <td> {{$filmes->title}}</td>
      <td> {{$diretores->name}}</td>
      <td> {{$filmes->duracao}}</td>
      <td> {{$filmes->origem}}</td>
      <td> {{$filmes->ano}}</td>
      <td> {{$filmes->created_at}}</td>
      <td>
         <a href="">
            <button class="bnt btn-dark">Visualizar</button>
         </a>
         <a href="">
            <button class="bnt btn-primary">Editar</button>
         </a>
         <a href="">
            <button class="bnt btn-danger">Excluir</button>
         </a>
      </td>

    </tr>
  @endforeach()
   
  </tbody>
</table>
</div>

@endsection