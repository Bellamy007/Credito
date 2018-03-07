<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use SoftDeletes;
    protected $table="clientes";
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'nombre', 'app', 'apm', 'telefono', 'direccion','cp', 'estado','ciudad','localidad', 'estatus',
    ];
}
