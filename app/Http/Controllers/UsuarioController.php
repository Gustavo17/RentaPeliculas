<?php

namespace cinema\Http\Controllers;

use Illuminate\Http\Request;
use cinema\Http\Requests\UserCreateRequest;
use cinema\Http\Requests\UserUpdateRequest;
use cinema\Http\Requests;
use cinema\Http\Controllers\Controller;
use cinema\User;
use Session;
use Redirect;
use Illuminate\Routing\Route;

class UsuarioController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin',['only'=>['create','edit']]);
        $this->beforeFilter('@find',['only'=>['edit','update','destroy']]);
    }

    public function find(Route $route){
        $this->user=User::find($route->getParameter('usuario'));
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users=User::paginate(9);
        if ($request->ajax()) {
            return response()->json(view('usuario.users',compact('users'))->render());
        }
        return view('usuario.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
            User::create($request->all());

        return redirect('/usuario')->with('message','Usuario Creado Correctamente');
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
        return view('usuario.edit',['user'=>$this->user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, UserUpdateRequest $request)
    {
        $this->user->fill($request->all());
        $this->user->save();

        Session::flash('message','Usuario Editado Correctamente');
        return Redirect::to('/usuario');
    }   


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {       
       $this->user->delete();
       Session::flash('message','Usuario Eliminando Correctamente');
       return Redirect::to('/usuario');
    }
}
