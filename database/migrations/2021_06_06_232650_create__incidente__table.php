<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncidenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Incidente', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre')->nullable();
            $table->dateTime('Fecha_Inicio')->nullable();
            $table->dateTime('Fecha_Fin')->nullable();
            $table->text('Descripcion')->nullable();
            $table->text('Respuesta')->nullable();
            $table->string('Archivo');

            $table->unsignedBigInteger('Id_Servicio')->nullable();
            $table->unsignedBigInteger('Id_TipoIncidente')->nullable();
            $table->unsignedBigInteger('Id_Canal')->nullable();
            $table->unsignedBigInteger('Id_NivelRiesgo')->nullable();
            $table->unsignedBigInteger('Id_Status')->nullable();
            $table->unsignedBigInteger('Id_UsuarioCliente')->nullable();
            $table->unsignedBigInteger('Id_UsuarioSoporte')->nullable();

            $table->timestamps();

            $table->foreign('Id_Servicio')->references('id')->on('Servicio');
            $table->foreign('Id_TipoIncidente')->references('id')->on('Tipo_Incidente');
            $table->foreign('Id_Canal')->references('id')->on('Canal');
            $table->foreign('Id_NivelRiesgo')->references('id')->on('Nivel_Riesgo');
            $table->foreign('Id_Status')->references('id')->on('Status');
            $table->foreign('Id_UsuarioCliente')->references('id')->on('Usuario_Cliente');
            $table->foreign('Id_UsuarioSoporte')->references('id')->on('Usuario_Soporte');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Incidente');
    }
}
