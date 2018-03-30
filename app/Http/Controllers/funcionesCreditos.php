<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use DB;

class funcionesCreditos extends Controller
{
    private $options;
    public function comboCliente() {
        $cliente = DB::select('SELECT DISTINCT c.id,CONCAT( c.nombre," ",c.app," ", c.apm) AS nombre FROM clientes c
                        LEFT JOIN prestamos p ON c.id = p.id_cliente');
                       // WHERE (SELECT COUNT(p.id_cliente)) < 2
        return $cliente;
    }
    
    public function comboCriterio(Request $request) {
        $avales = DB::select('SELECT DISTINCT c.id,CONCAT( c.nombre," ",c.app," ", c.apm) AS nombre FROM clientes c
                        LEFT JOIN prestamos p ON c.id = p.id_cliente WHERE c.id != ? ',[$request['id_aval']]);
        foreach($avales as $res):
            $this->options .= '<option value="'.$res->id.'"> '.$res->nombre.' </option>';
        endforeach;
        return $this->options;
    }
    
    public function infoCliente(Request $request) {
        $cliente = DB::select('SELECT c.id,CONCAT( c.nombre," ",c.app," ", c.apm) AS nombre, c.telefono, c.ciudad, c.cp, c.direccion, c.localidad  FROM clientes c
                        LEFT JOIN prestamos p ON c.id = p.id_cliente
                        WHERE (SELECT COUNT(p.id_cliente)) < 2 AND c.id = ?',[$request['id_cliente']]);
        
        return view('creditos.infoCliente',compact('cliente'));
    }
    
    public function folioCredito() {
        $folio = DB::select('SELECT folioPrestamos() AS folio;');
        return $folio;
    }
    
    public function insertAvales($folioCredito,$id_cli_aval,$val=true) {
        $cuantos = (count($id_cli_aval));
        for($y=0; $cuantos > $y; $y++){
            DB::insert('INSERT INTO prestamos_aux_avales (id_prestamo, id_cli_aval) VALUES ( ?, ? )',[$folioCredito, $id_cli_aval[$y]]);
        }
        return $val;
    }
}
