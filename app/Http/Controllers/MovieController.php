<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
class MovieController extends Controller
{
    public function lista(){
        $peliculas=Movie::orderBy('id','ASC')->paginate(5);
        return view('/peliculas',compact('peliculas'));
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

    // public function editar($id){
    //     $pelicula=Movie::find($id);
    //     return view('/editaPelicula',compact('pelicula'));
    // }

    public function editar($id){
        $pelicula = Movie::findOrFail($id);
        return view('/editaPelicula', compact('pelicula'));
    }

    // public function actualizar(Request $datos){
    //     $validaciones = [
          
    //       'title' => 'required|min:2',
    //       'rating' => 'required|numeric|max:10',
    //       'awards' => 'required|numeric',
    //       'release_date' => 'required|date',
    //     ];
  
    //     $this->validate($datos, $validaciones);
  
        
    //     $peliculaEditada = Movie::find($datos["id"]);
  
    //     $peliculaEditada->title = $datos['title'];
    //     $peliculaEditada->rating = $datos['rating'];
    //     $peliculaEditada->awards = $datos['awards'];
    //     $peliculaEditada->release_date = $datos['release_date'];
  
    //     $peliculaEditada->save();
  
    //     return back()->with('mensaje','Pelicula Editada y Guardada con exito, Gracias!!');
  
    //   }

    
    public function actualizar(Request $id)    {
        //
        $validator = $this->loginValidation($request);
        $this->validate($request=[ 
            'title' => 'required|min:2',
            'rating' => 'required|numeric|max:10',
             'awards' => 'required|numeric',
            'release_date' => 'required|date',
            ]);
 
        Movie::find($id)->actualizar($request->all());
        return redirect()->route('/peliculas');
    }



        public function destroy($id)
        {
            $registro = Movie::find($id);
            $registro->delete();

            return redirect('/peliculas'); back()->with('mensaje','Pelicula Eliminada con exito, Gracias');
    }
}
