<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pacientes', function (Blueprint $table) {
            $table->increments('idmascota');
            $table->integer('IdCliente')->unsigned();
            $table->string('Nombre',20);
            $table->string('especie',15);
            $table->string('raza',15);
            $table->string('fechaNacimiento');
            $table->foreign('IdCliente')->references('IdClient')->on('Registros')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('Paciente');
    }
}
