<?php

namespace cinema\Http\Controllers;

use Illuminate\Http\Request;
use cinema\Http\Requests;
use cinema\Tienda;
use Session;
use Redirect;
use cinema\Http\Controllers\Controller;

class TiendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiendas = Tienda::All();
        return view('tienda.index',compact('tiendas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tienda.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         Tienda::create([
            'ciudad'=>$request['ciudad'],
            'distrito'=>$request['distrito'],
            'direccion'=>$request['direccion'],
        ]);
      return redirect('/tienda')->with('message','Sucursal Creado Correctamente');
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
         $tienda=Tienda::find($id);
        return view('tienda.edit',['tienda'=>$tienda]);
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
        $tienda=Tienda::find($id);
        $tienda->fill($request->all());
        $tienda->save();

        Session::flash('message','Sucursal Editado Correctamente');
        return Redirect::to('/tienda');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tienda::destroy($id);
        Session::flash('message','Tienda Eliminando Correctamente');
        return Redirect::to('/tienda');
    }
}
