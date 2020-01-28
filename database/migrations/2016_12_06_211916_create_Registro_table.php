<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Registros', function (Blueprint $table) {
            $table->increments('IdClient')->unsigned();
            $table->string('Nombre',20);
            $table->string('Apellido',20);
            $table->string('Telefono',15);
            $table->string('Direccion',40);
            $table->string('password',8);
            $table->string('email',30);
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
        Schema::drop('Registro');
    }
}
