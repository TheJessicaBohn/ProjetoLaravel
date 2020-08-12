@extends('templates.template')

@section('content')
<h1 class="text-center">Cadastrar</h1> <hr>
    <div class="col-4  m-auto" ></div>
    <form name="formCad" id="formCad" action="{{url('filmes')}}" method="post">
    {{ csrf_field() }}
     <input class= "form-control" type="text" name="title" id="title" placeholder="Título:">
     <select class= "form-control" name="id_diretor" id="id_diretor">
     <option value="">Diretor</option>
     @foreach($diretores as $diretor)
      <option value="{{$diretor->id}}">{{$diretor->name}}</option>
     @endforeach

     </select>
     <input class= "form-control" type="number" name="duracao" id="duracao" placeholder="Duração:">
     <input class= "form-control" type="text" name="origem" id="origem" placeholder="origem:">
     <input class= "form-control" type="date" name="ano" id="ano" placeholder="Ano:yyyy:mm:dd">   
     <input class= "btn btn-primary" type="submit" value="Cadastrar">
    </form>
   
</div>

@endsection