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
        // Schema::create('ubicacions', function (Blueprint $table) {
        //     $table->id();
        //     $table->String('codigo_ubi')->unique();
        //     $table->unsignedBigInteger('codigo_estantes');

        //     $table->foreign('codigo_estantes')
        //     ->references('id')
        //     ->on('estantes')
        //     ->onDelete('Cascade')
        //     ->onCascade('Cascade');

        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('ubicacions');
    }
};
