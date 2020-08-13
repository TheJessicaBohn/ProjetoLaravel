@extends('templates.template')

@section('content')
<h1 class="text-center">Cadastrar</h1> <hr>
    <div class="col-6  m-auto" >
       
        @if(isset($errors) && count($errors)>0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
            @foreach($errors->all() as $erro)
            {{$erro}}
            @endforeach
            </div>
        @endif  

    <form name="formCad" id="formCad" action="{{url('filmes')}}" method="post">
    @csrf
     <input class= "form-control" type="text" name="title" id="title" placeholder="Título:"required> <br>
     <select class= "form-control" name="id_diretor" id="id_diretor" required> 
     <option value="">Diretor</option> 
     @foreach($diretores as $diretor)
      <option value="{{$diretor->id}}">{{$diretor->name}}</option>
     @endforeach
     </select> <br>
     <input class= "form-control" type="number" name="duracao" id="duracao" placeholder="Duração:" required> <br>
     <input class= "form-control" type="text" name="origem" id="origem" placeholder="País:" required> <br>
     <input class= "form-control" type="date" name="ano" id="ano" placeholder="Ano:yyyy:mm:dd" required> <br>  
     <input class= "btn btn-primary" type="submit" value="Cadastrar">
    </form>
    </div>  
   
</div>

@endsection