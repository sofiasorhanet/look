@extends('plantilla')
@section('titulo')
    <h2 class="text-center"> Editar una Pelicula </h2>    
@endsection

@section('seccion')

   

        <div class="d-flex justify-content-center ">
            <form class="" action="/editaPelicula" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                @if ($errors)
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
                @endif
                <input type="hidden" name="id" value="{{$peliculaEditada->id}}">
                
                <div class="container-sm text-justify bg-info ">
                    <label class="m-md-3"for="">Titulo:</label>
                        <input type="text" name="title" value="{{$peliculaEditada->title}}">
                </div>
                <div class="container-sm text-justify bg-info">
                    <label class="m-md-3"for="">Rating:</label>
                        <input type="text" name="rating" value="{{$peliculaEditada->rating}}">
                </div>
                <div class="container-sm text-justify bg-info ">
                    <label class="m-md-3" for="">Premios:</label>
                        <input type="number" name="awards" value="{{$peliculaEditada->awards}}">
                </div>
                <div class="container-sm text-justify bg-info ">
                    <label class="m-md-3" for="">Estreno:</label>
                        <input type="date" name="release_date" value="{{$peliculaEditada->release_date}}">
                </div>
                <div class="container-sm text-justify bg-info">
                    <label class="m-md-3" for="">Duracion:</label>
                        <input type="number" name="length" value="{{$peliculaEditada->length}}">
                </div>
                <button class= "btn btn-primary my-4 btn-block" type="submit">Editar Pelicula</button>

            </form>
        </div>

    {{-- SIRVE PARA AGREGAR UN MENSAJE CUANDO SE AGREGA un mensaje --}}
        @if (session('mensaje'))
            <div class="alert alert-success text-center">
                {{session('mensaje')}}
            </div>
        @endif


@endsection