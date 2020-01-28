<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Ventas', function (Blueprint $table) {
            $table->increments('Folio');
            $table->string('CodigoBarra',20);
            $table->integer('IdCliente')->unsigned();
            $table->string('FechaVenta');
            $table->float('Total');
            $table->integer('Cantidad');
            $table->foreign('CodigoBarra')->references('CodigoBarra')->on('Productos')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('Ventas');
    }
}
