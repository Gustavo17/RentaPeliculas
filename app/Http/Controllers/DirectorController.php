<?php

namespace cinema\Http\Controllers;

use Illuminate\Http\Request;
use cinema\Http\Requests;
use cinema\Http\Controllers\Controller;
use cinema\Director;
use Session;
use Redirect;
use Illuminate\Routing\Route;


class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $directors = Director::All();
        return view('director.index',compact('directors'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('director.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       Director::create([
            'nombre'=>$request['nombre'],
            'nacionalidad'=>$request['nacionalidad'],
        ]);
      return redirect('/director')->with('message','Director Creado Correctamente');
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
        $director=Director::find($id);
        return view('director.edit',['director'=>$director]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $director=Director::find($id);
        $director->fill($request->all());
        $director->save();

        Session::flash('message','Director Editado Correctamente');
        return Redirect::to('/director');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Director::destroy($id);
       Session::flash('message','Director Eliminando Correctamente');
       return Redirect::to('/director');
    }
}
