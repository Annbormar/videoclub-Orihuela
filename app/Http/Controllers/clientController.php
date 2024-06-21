<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Movie;

class clientController extends Controller
{
    public function index()
    {
        $client['listClients']= Client::get();
        return view('clients.list',$client);
    }

    public function create(){
        return view('clients.create');
    }

    public function store(Request $request){
        #Recibo los datos de la vista y creo un nuevo cliente
        $clientData = $request->except('_token');
        $client = new Client();
        $client->name = $clientData['name'];
        $client->surname = $clientData['surname'];
        $client->dateOfBirth = $clientData['dateOfBirth'];
        $client->movies = $clientData['movies'];
        $client->save();
        return redirect()->route('clients.list');
    }

    public function edit($id){
        $client['client'] = Client::find($id);
        return view('clients.edit',$client);
    }

    public function update($id, Request $request){
        #Obtengo el cliente y lo actualizo
        $clientData = request()->except(['_token', '_method']);
        Client::where('id', '=', $id)->update($clientData);
        return redirect()->route('clients.list');

    }

    public function show($id){
        #Obtengo el cliente y lo paso a la vista para mostrar
        $client= Client::findOrFail($id);
        return view('clients.show', compact('client'));
    }

    public function delete($id){
        #Obtengo el cliente y lo borro
        $client= Client::findOrFail($id);
        if ($client){
            $client->delete();
        }
        return redirect()->route('clients.list');
    }

    public function rent($id){
        $movies= Movie::get();
        return view('clients.rent', ['id' => $id, 'listMovies' => $movies]);
    }

    public function saveRent(Request $request){
        #Obtengo el cliente y la pelicula
        $client= Client::findOrFail($request['id']);
        $movie= Movie::findOrFail($request['movieId']);

        
        #Modifico el cliente para sumar la nueva pelicula alquilada
        $clientMovies = $client['movies'];
        $clientMovies = $clientMovies . ','. $request['movieId'];
        $update['name']=$client['name'];
        $update['surname']=$client['surname'];
        $update['dateOfBirth']=$client['dateOfBirth'];
        $update['movies']=$clientMovies;
        Client::where('id', '=', $request['id'])->update($update);

        #modifico el stock de la pelicula para reducirlo en 1
        $movieStock = $movie['stock'];
        $movieStock = $movieStock -1;
        $temp['title']=$movie['title'];
        $temp['director']=$movie['director'];
        $temp['duration']=$movie['duration'];
        $temp['score']=$movie['score'];
        $temp['stock']=$movieStock;

        Movie::where('id', '=', $request['movieId'])->update($temp);

        return redirect()->route('clients.list');
    }

    public function return($id){
        $movies= Movie::get();
        return view('clients.return', ['id' => $id, 'listMovies' => $movies]);
    }

    public function saveReturn(Request $request){
        #Obtengo el cliente y la pelicula
        $client= Client::findOrFail($request['id']);
        $movie= Movie::findOrFail($request['movieId']);

        
        #Modifico el cliente para eliminar la pelicula devuelta
        $clientMovies = $client['movies'];
        
        $splits = explode(',', $clientMovies);
        $index = array_search($request['movieId'], $splits);
        if ($index !== false) {
            unset($splits[$index]);
        }
        $clientMoviesNew = implode(',', $splits);

        $update['name']=$client['name'];
        $update['surname']=$client['surname'];
        $update['dateOfBirth']=$client['dateOfBirth'];
        $update['movies']=$clientMoviesNew;
        Client::where('id', '=', $request['id'])->update($update);

        #modifico el stock de la pelicula para aumentarlo en 1
        $movieStock = $movie['stock'];
        $movieStock = $movieStock +1;
        $temp['title']=$movie['title'];
        $temp['director']=$movie['director'];
        $temp['duration']=$movie['duration'];
        $temp['score']=$movie['score'];
        $temp['stock']=$movieStock;

        Movie::where('id', '=', $request['movieId'])->update($temp);

        return redirect()->route('clients.list');
    }

}
