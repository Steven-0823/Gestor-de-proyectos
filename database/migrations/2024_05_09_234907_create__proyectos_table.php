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
        Schema::create('_proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->unsignedBigInteger('lider_id');
            $table->string('Descripcion');
            $table->string('Prioridad');
            $table->decimal('presupuesto', 10, 2);
            $table->decimal('presupuesto_usado', 10, 2);
            $table->string('estado');
            $table->timestamps();

            $table->foreign('lider_id')->references('id')->on('_usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_proyectos');
    }
};
