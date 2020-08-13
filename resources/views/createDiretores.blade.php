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
    
    
    <form name="formCad" id="formCad" action="{{url('diretores')}}" method="post">
    @csrf
     <input class= "form-control" type="text" name="name" id="name" placeholder="Diretor:"required> <br>
     <input class= "form-control" type="text" name="pais" id="pais" placeholder="País:"required> <br>
     <input class= "form-control" type="date" name="ano" id="ano" placeholder="Ano:yyyy:mm:dd"required> <br>  
     <input class= "btn btn-primary" type="submit" value="Cadastrar">
    </form>
    </div>
</div>

@endsection