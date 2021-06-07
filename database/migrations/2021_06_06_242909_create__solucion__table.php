<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolucionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Solucion', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre')->unique()->nullable();
            $table->text('Descripcion')->nullable();
            $table->dateTime('Fecha')->nullable();
            $table->unsignedBigInteger('Id_Incidente');
            $table->timestamps();

            $table->foreign('Id_Incidente')->references('id')->on('Incidente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Solucion');
    }
}
