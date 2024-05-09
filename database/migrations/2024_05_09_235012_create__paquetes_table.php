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
        Schema::create('_paquetes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_proyecto');
            $table->string('nom_paquete');
            $table->text('descripcion')->nullable();
            $table->string('tipo')->nullable();
            $table->string('estado')->nullable();
            $table->unsignedBigInteger('id_encargado');
            $table->timestamps();

            $table->foreign('id_proyecto')->references('id')->on('_proyectos');
            $table->foreign('id_encargado')->references('id')->on('_usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_paquetes');
    }
};
