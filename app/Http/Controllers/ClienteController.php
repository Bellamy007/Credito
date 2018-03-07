<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use DB;
use App\Cliente;
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos= Cliente::all();
//    $datos = DB::select("SELECT * FROM clientes");
       return view('clientes.index', compact('datos'))->with(['active'=>['active','open','cliente']]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cliente::create([
            'nombre'=> $request['nombre'],
            'app'=> $request['app'],
            'apm'=> $request['apm'],
            'telefono'=> $request['telefono'],
            'direccion'=> $request['direccion'],
            'cp'=> $request['cp'],
            'estado'=> $request['estado'],
            'ciudad'=> $request['ciudad'],
            'localidad'=> $request['localidad'],
            'estatus'=> $request['estatus']
        ]);
        return redirect('/cliente')->with('message','Registro Guardado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datos = Cliente::find($id);
        return view('clientes.edit',compact('datos'))->with(['active'=>['active','open','cliente']]);
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
        $cliente = Cliente::find($id);
        $cliente->fill($request->all());
        $cliente->save();
        return redirect('cliente')->with('message','Registro Actulizado correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteCliente($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect('cliente')->with('message','Resgitro Eliminado Correctamente');
    }
}
