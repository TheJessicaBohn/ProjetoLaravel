@extends('templates.template')

@section('content')
<h1 class="text-center">Visualizar Diretor</h1> <hr>
<div class="col-4 m-auto">

Id:{{$diretor->id}} <br>
Nome:{{$diretor->name}} <br>
Nascimento:{{$diretor->ano}} <br>
País:{{$diretor->pais}} <br>
Criado em:{{$diretor->created_at}} <br>
Mudado em:{{$diretor->updated_at}} <br>

</div>
@endsection