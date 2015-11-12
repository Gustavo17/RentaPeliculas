<?php

namespace cinema\Http\Controllers;

use Illuminate\Http\Request;
use cinema\Http\Requests;
use cinema\Alquiler;
use cinema\Movie;
use cinema\Actor;
use cinema\Director;
use cinema\Cliente;
use Session;
use Redirect;
use cinema\Http\Controllers\Controller;

class AlquilerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $alquilers = Alquiler::paginate(5);
        return view('alquiler.index',compact('alquilers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            $clientes = Cliente::orderBy('nombre', 'asc')->lists('nombre', 'id');
            $movies = Movie::orderBy('titulo', 'asc')->lists('titulo', 'id');
            
            return view('alquiler.create', compact('clientes', 'movies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            Alquiler::create([
            'cliente_id'=>$request['cliente_id'],
            'movie_id'=>$request['movie_id'],
            'status_id'=>$request['status_id'],
            'cantidad_ejem'=>$request['cantidad_ejem'],
            'registration_date'=>$request['registration_date'],
            'delivery_date'=>$request['delivery_date']          

        ]);
      return redirect('/alquiler')->with('message','Alquiler Añadido Correctamente');
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
        $alquilers=Alquiler::find($id);
        $clientes = Cliente::orderBy('nombre', 'asc')->lists('nombre', 'id');
        $movies = Movie::orderBy('titulo', 'asc')->lists('titulo', 'id');
        return view('alquiler.edit', compact('alquilers','clientes', 'movies'));
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
        $alquiler=Alquiler::find($id);
        $alquiler->fill($request->all());
        $alquiler->save();

        Session::flash('message','Alquiler Editado Correctamente');
        return Redirect::to('/alquiler');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alquiler::destroy($id);
       Session::flash('message','Alquiler Eliminando Correctamente');
       return Redirect::to('/alquiler');
    }
}
