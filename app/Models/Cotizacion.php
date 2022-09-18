<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cotizacion extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function clientes(){
        //belongsTo{pertenece a} //metodo para recibir la foreing key
    return $this->belongsTo(Cliente::class);
    }

    public function emepleados(){
        //belongsTo{pertenece a} //metodo para recibir la foreing key
    return $this->belongsTo(Empleado::class);
    }

    public function detallesCotizaciones(){
        //hasMany{tien mucho} //metodo para dar la primari key
    return $this->hasMany(DetalleCotizacion::class);
    }
}
