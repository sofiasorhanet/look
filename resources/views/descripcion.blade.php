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

    
@endsection