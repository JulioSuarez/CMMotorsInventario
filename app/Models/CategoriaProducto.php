<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaProducto extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function produtos(){
        //hasMany{tien mucho} //metodo para dar la primari key
    return $this->hasMany(Producto::class);
    }
}
