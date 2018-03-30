<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    protected $table="prestamos";
    protected $fillable = [
        'id_usuario', 'folio' ,'id_cliente', 'fecha', 'cantidad', 'interes','contacto', 'estatus',
    ];
}
