@extends('plantilla')

@section('titulo')
    <h2 "display-4 text-center">Datos del Actor</h2>
@endsection

{{-- @section('seccion')
    <div>
        <ul>
            <li>Nombre:{{$actor->first_name}}</li>
            <li>Apellido:{{$actor->last_name}}</li>
            <li>Rating:{{$actor->rating}}</li>            
        </ul>
    </div>

    <div class="container md">
        <h3>Actores</h3>
         
        <p>{{$actor->first_name . " " .$actor->last_name}}</p>
        
    </div>
@endsection --}}
@section('seccion')
    

<table class="table">
    <thead>
    <tr class="table-danger" >
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Rating</th>
        
    </tr>
    </thead>
    <tbody>
   
    <tr class="bg-ligth">
        <th scope="row">{{$actor->id}}</th>
        <td>
            <a href="/describirse/{{$actor->id}}">{{$actor->first_name}}</a>
        </td>
        <td>
            <a href="/describirse/{{$actor->id}}">{{$actor->last_name}}</a>
        <td>
            <a href="/describirse/{{$actor->id}}">{{$actor->rating}}</a>
        </td> 
      
    </tr>
  
    </tbody>
</table>

</div>

@endsection