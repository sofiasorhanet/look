@extends('plantilla')

@section('titulo')
    <h2 "display-4 text-center">Agregar Pelicula</h2>
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
        <form class="" action="/agregarPelicula" method="post">
            @csrf
            
            <div class="container-sm text-justify bg-info ">
                <label class="m-md-3"for="">Titulo:</label>
                    <input type="text" name="title" value="{{old('title')}}">
            </div>
            <div class="container-sm text-justify bg-info">
                <label class="m-md-3"for="">Rating:</label>
                    <input type="text" name="rating" value="{{old('rating')}}">
            </div>
            <div class="container-sm text-justify bg-info ">
                <label class="m-md-3" for="">Premios:</label>
                    <input type="number" name="awards" value="{{old('awards')}}">
            </div>
            <div class="container-sm text-justify bg-info ">
                <label class="m-md-3" for="">Estreno:</label>
                    <input type="date" name="release_date" value="{{old('release_date')}}">
            </div>
            <div class="container-sm text-justify bg-info">
                <label class="m-md-3" for="">Duracion:</label>
                    <input type="number" name="length" value="{{old('length')}}">
            </div>
            <button class= "btn btn-primary my-4 btn-block" type="submit">Agregar Pelicula</button>
    
        </form>
    </div>

@endsection