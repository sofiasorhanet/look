@extends('plantilla')

@section('titulo')
    <h2 "display-4 text-center">Descripcion</h2>
@endsection

@section('seccion')
    <div>
        <ul>
            <li>Rating:{{$pelicula->rating}}</li>
            <li>Premios:{{$pelicula->awards}}</li>
            <li>Duracion:{{$pelicula->length}}</li>
            <li>Estreno:{{$pelicula->release_date}}</li>
            
        </ul>
    </div>

    <div class="container md">
        <h3>Actores</h3>
        @foreach ($pelicula->actors as $actor)
        <p>{{$actor->first_name . " " .$actor->last_name}}</p>
        @endforeach
    </div>
@endsection