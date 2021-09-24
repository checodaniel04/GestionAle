<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gestions', function (Blueprint $table) {
            $table->id();
            $table -> enum('fprogramas', ['Si', 'No']);
            $table -> text('programa')->nullable();
            $table -> longtext('gestion')->nullable();
            $table -> string('gestor');
            $table -> enum('estado', ['Pendiente', 'Atendido', 'Cerrado','Cancelado']);
            $table -> string('razon')->nullable();
            $table -> unsignedBigInteger('personas_id')->nullable();
            $table -> unsignedBigInteger('users_id')->nullable();
            $table->foreign('personas_id')->references('id')->on('personas')->onDelete('set null');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('set null');
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
        Schema::dropIfExists('gestions');
    }
}
