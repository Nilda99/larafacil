<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactoFabricaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacto_fabrica', function (Blueprint $table) {
            $table->id('idContactoFabrica');
            $table->unsignedInteger('idFabrica');
            $table->foreign('idFabrica')->references('id')->on('users');

            $table->int('idTipoTelefono');
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
        Schema::dropIfExists('contacto_fabrica');
    }
}
