<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos= User::All();
        return view('usuario.index', compact('datos'))->with(['active'=>['active','open','usuario']]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $psw = new setPassworAttribute($request['password']);
        User::create([
            'name'=> $request['name'],
            'app'=> $request['app'],
            'apm'=> $request['apm'],
            'username'=> $request['username'],
            'email'=> $request['email'],
            'password'=> $psw,
            'tipo'=> $request['tipo'],
            'estatus'=> $request['estatus']
        ]);
        return redirect('/usuario')->with('message','Registro Guardado correctamente');
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
        $datos=User::find($id);
        return view('usuario.edit',compact('datos'))->with(['active'=>['active','open','usuario']]);
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
        $auth = new User();
        $psw = $auth->setPassworAttribute($request['password']);
        $user = User::find($id);
        $user->fill([
            'name'=> $request['name'],
            'app'=> $request['app'],
            'apm'=> $request['apm'],
            'username'=> $request['username'],
            'email'=> $request['email'],
            'password'=> $psw,
            'tipo'=> $request['tipo'],
            'estatus'=> $request['estatus']
        ]);
        $user->save();
        return redirect('usuario')->with('message','Registro Actulizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteUser($id)
    {
        User::destroy($id);
        return redirect('usuario')->with('message','Resgitro Eliminado Correctamente');
    }
}
