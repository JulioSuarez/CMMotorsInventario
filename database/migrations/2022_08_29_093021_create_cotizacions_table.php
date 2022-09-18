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
        Schema::create('cotizacions', function (Blueprint $table) {
            $table->id();
            $table->decimal('monto_total');
            $table->date('fecha_validez');
            $table->date('fecha_realizada'); //se debe se mover a la tabla ventas
            $table->time('hora');
            $table->string('estado');
            $table->unsignedBigInteger('ci_cliente');
            $table->unsignedBigInteger('ci_empleado');

            //foring key con proveedores
            $table->foreign('ci_cliente')
            ->references('ci')
            ->on('clientes')
            ->onDelete('Cascade')
            ->onCascade('Cascade');

            //foring key con proveedores
            $table->foreign('ci_empleado')
            ->references('ci')
            ->on('empleados')
            ->onDelete('Cascade')
            ->onCascade('Cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cotizacions');
    }
};
