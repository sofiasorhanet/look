@extends('plantilla')

@section('titulo')
    <h2 "display-4 text-center">Agregar Actor</h2>
@endsection

@section('seccion')
    @if ($errors)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    
    <div class="d-flex justify-content-center ">
        <form class="" action="/agregarActor" method="post">
            @csrf
            
            <div class="container-sm text-justify bg-info ">
                <label class="m-md-3"for="">Nombre:</label>
                    <input type="text" name="first_name" value="{{old('first_name')}}">
            </div>
            <div class="container-sm text-justify bg-info">
                <label class="m-md-3"for="">Apellido:</label>
                    <input type="text" name="last_name" value="{{old('last_name')}}">
            </div>
            <div class="container-sm text-justify bg-info ">
                <label class="m-md-3" for="">Rating:</label>
                    <input type="number" name="rating" value="{{old('rating')}}">
            </div>
            
           
            <button class= "btn btn-primary my-4 btn-block" type="submit">Agregar Actor</button>
    
        </form>
    </div>
    @if (session('mensaje'))
    <div class="alert alert-success text-center">
        {{session('mensaje')}}
    </div>
@endif

@endsection