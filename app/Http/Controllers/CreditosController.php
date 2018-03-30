<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\funcionesCreditos;
use App\Prestamo;
use DB;
use Illuminate\Support\Facades\Auth;
class CreditosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = DB::select('SELECT   p.id,p.folio,CONCAT( cl.nombre," ",cl.app," ", cl.apm) AS cliente,p.fecha,p.cantidad,p.estatus,cl.telefono
                            FROM prestamos p
                            INNER JOIN clientes cl ON p.id_cliente = cl.id');
        return view('creditos.index', compact('datos'))->with(['active2'=>['active','open','busqueda']]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $credito= new funcionesCreditos();
        $cliente=$credito->comboCliente();
        $folio = $credito->folioCredito();
        return view('creditos.asignacion', compact('cliente','folio'))->with(['active2'=>['active','open','create']]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $credito= new funcionesCreditos();
        $folio = DB::table('prestamos')->insertGetId([
            'folio' => $request['folio'],
            'id_usuario' => Auth::id(),
            'id_cliente' => $request['cliente'],
            'fecha'=> date("Y-m-d"),
            'cantidad' => $request['cantidad'],
            'interes' => 7.8,
            'contacto' => $request['contacto']."|".$request['telefono'],
            'estatus' => 1,
        ]);
        $credito->insertAvales($folio, $request['avales']);
        return redirect('credito/create')->with('message','Crédito creado correctamente');
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
        $credito= new funcionesCreditos();
        $cliente=$credito->comboCliente();
        $folio = $credito->folioCredito();
        $clientes= Prestamo::find($id);
        return view('creditos.edit', compact('clientes','cliente','folio'))->with(['active2'=>['active','open','none']]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
