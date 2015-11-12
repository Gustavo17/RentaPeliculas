<?php

namespace cinema\Http\Controllers;

use Illuminate\Http\Request;
use cinema\Http\Requests;
use cinema\Http\Controllers\Controller;
use cinema\Movie;
use cinema\Actor;
use cinema\Director;
use Session;
use Redirect;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies=Movie::paginate(5);
        return view('pelicula.index',compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $directors = Director::orderBy('nombre', 'asc')->lists('nombre', 'id');
        $actors = Actor::orderBy('nombre', 'asc')->lists('nombre', 'id');

        return view('pelicula.create', compact('directors', 'actors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Movie::create([
            'titulo'=>$request['titulo'],
            'nacionalidad'=>$request['nacionalidad'],
            'productora'=>$request['productora'],
            'anostreno'=>$request['anostreno'],
            'ejemplares'=>$request['ejemplares'],
            'estado'=>$request['estado'],
            'director_id' =>$request['director_id'],
            'actor_id'=>$request['actor_id'],

        ]);
      return redirect('/pelicula')->with('message','Pelicula Añadido Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movies=Movie::find($id);
        $directors = Director::orderBy('nombre', 'asc')->lists('nombre', 'id');
        $actors = Actor::orderBy('nombre', 'asc')->lists('nombre', 'id');
        return view('pelicula.edit', compact('movies','directors', 'actors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $movie=Movie::find($id);
        $movie->fill($request->all());
        $movie->save();

        Session::flash('message','Pelicula Editado Correctamente');
        return Redirect::to('/pelicula');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Movie::destroy($id);
       Session::flash('message','Pelicula Eliminando Correctamente');
       return Redirect::to('/pelicula');
    }
}
