<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table -> string('name');
            $table -> string('correo');
            $table -> string('telefono');
            $table -> string('calle');
            $table -> string('numero');
            $table -> string('fracc');
            $table -> integer('cp');
            $table -> string('ciudad');
            $table -> string('estado');
            $table -> string('celector');
            $table -> string('curp');
            $table -> integer('seccion');
            $table -> date('vigencia');
            $table -> date('fnacimiento')->nullable();
            $table -> string('fcredencial')->nullable();
            $table -> unsignedBigInteger('users_id')->nullable();
            $table->foreign('users_id')
            ->references('id')->on('users')
            ->onDelete('set null');
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
        Schema::dropIfExists('usuarios');
    }
}
