<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticiaintsTable extends Migration
{
    /**'users_id'
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticiaints', function (Blueprint $table) {
            $table->id();
            $table -> string('titulo');
            $table -> longtext('noticia')->nullable();
            $table -> enum('status', ['1', '2']); 
            $table -> string('url')->nullable();
            $table -> unsignedBigInteger('users_id')->nullable();
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
        Schema::dropIfExists('noticiaints');
    }
}
