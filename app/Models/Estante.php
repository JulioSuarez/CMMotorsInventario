<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estante extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function sectors(){
    return $this->belongsTo(Sector::class);
    }

  public function ubiacacions(){
   return $this->hasMany(Ubicacion::class);
}
}
