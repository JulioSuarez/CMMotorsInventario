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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('ci');
            $table->string('nombre');
            $table->string('apellido');
            $table->unsignedBigInteger('nit')->nullable(); //nunable
            $table->string('email')->nullable();
            $table->unsignedBigInteger('telefono')->nullable();
            $table->string('direccion')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
};
