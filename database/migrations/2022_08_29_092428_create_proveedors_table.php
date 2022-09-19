<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedors', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_proveedor');
            $table->string('proveedor_direccion');
            $table->integer('proveedor_telefono');
            $table->string('proveedor_correo');
            $table->string('nombre_proveedor_contacto');
            $table->unsignedBigInteger('nit')->unique();
            $table->string('tipo');//poriamos adicionar una descripcion
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proveedors');
    }
};
