@extends('plantilla')
@section('titulo')
    <h2 class="text-center"> Borrar una Pelicula {{$pelicula->title}} </h2>   
@endsection
@section('seccion')
    <form action="/borrarPelicula" method="POST">
        @csrf

        <input type="hidden" name="id" value="{{$pelicula->id}}">
        <input type="submit" name="" value="borrar pelicula">
    </form>

    @if (session('mensaje'))
    <div class="alert alert-success text-center">
        {{session('mensaje')}}
    </div>
@endif
@endsection