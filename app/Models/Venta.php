<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
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

    public function detallesVentas(){
        //hasMany{tien mucho} //metodo para dar la primari key
    return $this->hasMany(DetalleVentas::class);
    }


}
