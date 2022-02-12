<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_alumnos', function (Blueprint $table) {
            $table->id();
            $table->string("nombre",255);
            $table->date("fn");
            $table->string("gen");
            $table->integer("matricula");
            $table->text("direccion");
            $table->string("email",50);
            $table->string("pass",18);
            $table->text("foto")->nullable();
            $table->integer("id_grupo");
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
        Schema::dropIfExists('alumnos');
    }
}
