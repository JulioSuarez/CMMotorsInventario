<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public $timestamps = false;


    public function categorias(){
        //belongsTo{pertenece a} //metodo para recibir la foreing key
    return $this->belongsTo(CategoriaProducto::class);
    }

    // public function ubicaciones(){
    //     //belongsTo{pertenece a} //metodo para recibir la foreing key
    // return $this->belongsTo(Ubicacion::class);
    // }


    public function proveedores(){
        //belongsTo{pertenece a} //metodo para recibir la foreing key
    return $this->belongsTo(Proveedor::class);
    }

    public function detallesCotizaciones(){
        //hasMany{tien mucho} //metodo para dar la primari key
    return $this->hasMany(DetalleCotizacion::class);
    }

    public function detallesVentas(){
        //hasMany{tien mucho} //metodo para dar la primari key
    return $this->hasMany(DetalleVenta::class);
    }
}
