<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $primaryKey = 'ci';
    public $timestamps = false;

    public function user(){
        //belongsTo{pertenece a} //metodo para recibir la foreing key
    return $this->belongsTo(User::class);
    }

    public function cotizaciones(){
        //hasMany{tien mucho} //metodo para dar la primari key
    return $this->hasMany(Cotizacion::class);
    }

    public function ventas(){
        //hasMany{tien mucho} //metodo para dar la primari key
    return $this->hasMany(Venta::class);
    }
}
