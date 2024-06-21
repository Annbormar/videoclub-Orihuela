<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class movieController extends Controller
{
    public function index()
    {
        $movies['listMovies']= Movie::get();
        return view('movies.list',$movies);
    }

    public function create(){
        return view('movies.create');
    }

    public function store(Request $request){
        #Recibo los datos de la vista y creo una nueva pelicula
        $movieData = $request->except('_token');
        $movie = new Movie();
        $movie->title = $movieData['title'];
        $movie->director = $movieData['director'];
        $movie->score = $movieData['score'];
        $movie->duration = $movieData['duration'];
        $movie->stock = $movieData['stock'];
        $movie->save();
        #Movie::insert($movieData);
        return redirect()->route('movies.list');
    }

    public function edit($id){
        $movie['movie'] = Movie::find($id);
        return view('movies.edit',$movie);
    }

    public function update($id, Request $request){
        #Obtengo la pelicula y la edito
        $movieData = request()->except(['_token', '_method']);
        Movie::where('id', '=', $id)->update($movieData);
        return redirect()->route('movies.list');

    }

    public function show($id){
        #Obtengo la pelicula y la  muestro
        $movie= Movie::findOrFail($id);
        return view('movies.show', compact('movie'));
    }

    public function delete($id){
        #Obtengo la pelicula y la borro
        $movie= Movie::findOrFail($id);
        if ($movie){
            $movie->delete();
        }
        return redirect()->route('movies.list');
    }
}

