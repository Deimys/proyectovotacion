<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidatos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('cedula');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('fotoc');
            $table->integer('cantidad_votos');
            $table->string('clave');
            $table->unsignedBigInteger('partido_id');
            $table->unsignedBigInteger('coorporacion_id');
            $table->unsignedBigInteger('rol_id');
            $table->unsignedBigInteger('estado_id');
            $table->unsignedBigInteger('registraduria_id');

            $table->foreign('partido_id')->references('id')->on('partidos');
            $table->foreign('coorporacion_id')->references('id')->on('coorporacions');
            $table->foreign('rol_id')->references('id')->on('rols');
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->foreign('registraduria_id')->references('id')->on('registradurias');

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
        Schema::dropIfExists('candidatos');
    }
}
