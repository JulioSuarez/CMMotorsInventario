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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->String('cod_oem')->unique(); //codigo oem
            $table->String('cod_sustituto')->nullable()->unique(); //nunable
            $table->String('nombre');
            $table->string('marca');
            $table->string('procedencia');
            $table->string('descripcion');
            $table->unsignedBigInteger('cantidad');
            $table->unsignedBigInteger('cant_minima');
            $table->decimal('precio1');
            $table->decimal('precio2');
            $table->string('foto')->nullable();
            $table->date('fecha_expiracion')->nullable();
            $table->string('tienda'); //hacer una clase is es que habria mas atributos
            $table->string('unidad');   //piezas, .....
            $table->string('estado');
            $table->string('estante');
            $table->unsignedBigInteger('categoria')->nullable();
            $table->unsignedBigInteger('id_proveedor');
            // $table->unsignedBigInteger('id_ubicacion');

            //forieng key con categoria
            $table->foreign('categoria')
            ->references('id')
            ->on('categoria_productos')
            ->onDelete('Cascade')
            ->onCascade('Cascade');

            //foring key con proveedores
            $table->foreign('id_proveedor')
            ->references('id')
            ->on('proveedors')
            ->onDelete('Cascade')
            ->onCascade('Cascade');

            //foring key con proveedores
            // $table->foreign('id_ubicacion')
            // ->references('id')
            // ->on('ubicacions')
            // ->onDelete('Cascade')
            // ->onCascade('Cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
