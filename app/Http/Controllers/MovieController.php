<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
class MovieController extends Controller
{
    public function lista(){
        $peliculas=Movie::orderBy('id','ASC')->paginate(5);
        return view('peliculas',compact('peliculas'));
    }

    public function descripcion($id){
        $pelicula=Movie::find($id);
        return view('/descripcion', compact('pelicula'));
    }

    public function mostrarFormulario(){
        return view('/agregarPelicula');
    }

    public function agregarPelicula(Request $datos){
        $validaciones = [
          "title" => 'required|min:2',
          "rating" => 'required|numeric|max:10',
          "awards" => 'required|numeric',
          "release_date" => 'required|date',
          "length" => 'required|numeric'
        ];

        $this->validate($datos, $validaciones);

        
        $peliculaNueva=new Movie;
        $peliculaNueva->title=$datos["title"];
        $peliculaNueva->rating=$datos["rating"];
        $peliculaNueva->awards=$datos["awards"];
        $peliculaNueva->release_date=$datos["release_date"];

        $peliculaNueva->save();

        return back()->with('mensaje','Pelicula Agregada, Gracias!!');

    }
}
