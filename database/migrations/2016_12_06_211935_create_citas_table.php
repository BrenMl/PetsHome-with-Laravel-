<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->increments('folioCita');
            $table->integer('IdCliente')->unsigned();
            $table->integer('idmascota')->unsigned();
            $table->string('fechaCita');
            $table->string('hora');
            $table->string('servicio',20);
            $table->foreign('IdCliente')->references('IdClient')->on('Registros')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idmascota')->references('idmascota')->on('Pacientes')->onDelete('cascade')->onUpdate('cascade');
            $table-> engine ='InnoDB';
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('citas');
    }
}
