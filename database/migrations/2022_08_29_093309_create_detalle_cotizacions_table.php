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
        Schema::create('detalle_cotizacions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cantidad');
            $table->decimal('precio');
            $table->unsignedBigInteger('id_producto');
            $table->unsignedBigInteger('id_cotizacion');

            //foring key con producto
            $table->foreign('id_producto')
            ->references('id')
            ->on('productos')
            ->onDelete('Cascade')
            ->onCascade('Cascade');

            //foring key con proveedores
            $table->foreign('id_cotizacion')
            ->references('id')
            ->on('cotizacions')
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
        Schema::dropIfExists('detalle_cotizacions');
    }
};