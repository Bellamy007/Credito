<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('id_usuario')->unsigned();
                $table->foreign('id_usuario')->references('id')->on('users');
                $table->integer('id_cli_aval')->unsigned();
                $table->foreign('id_cli_aval')->references('id')->on('clientes');
            $table->date('fecha');
            $table->double('cantidad',15,8);
            $table->float('interes',9,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestamos');
    }
}
