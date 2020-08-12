@extends('templates.template')

@section('content')
<h1 class="text-center">Visualizar</h1> <hr>
<div class="col-20 m-auto">
@php
  $diretores= $filme->find($filme->id)->relDiretores;
@endphp

Id:{{$filme->id}} <br>
Título:{{$filme->title}} <br>
Diretor:{{$diretores->name}} <br>
Duração:{{$filme->duracao}} <br>
País:{{$filme->origem}} <br>
Ano:{{$filme->ano}} <br>
Criado em:{{$filme->created_at}} <br>
Mudado em:{{$filme->updated_at}} <br>

</div>
@endsection