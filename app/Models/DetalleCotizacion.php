<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleCotizacion extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function productos(){
        //belongsTo{pertenece a} //metodo para recibir la foreing key
    return $this->belongsTo(Producto::class);
    }


    public function cotizacions(){
        //belongsTo{pertenece a} //metodo para recibir la foreing key
    return $this->belongsTo(Cotizacion::class);
    }
}
