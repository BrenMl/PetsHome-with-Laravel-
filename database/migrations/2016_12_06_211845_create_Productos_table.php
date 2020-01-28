<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Productos', function (Blueprint $table) {
            $table-> engine ='InnoDB';
            $table->string('CodigoBarra',20);
            $table->string('Nombre',20);
            $table->string('FechaCaducidad');
            $table->integer('Existencia');
            $table->float('Precio');
            $table->string('Tipo',20);
            $table->primary('CodigoBarra');
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
        Schema::drop('Productos');
    }
}
