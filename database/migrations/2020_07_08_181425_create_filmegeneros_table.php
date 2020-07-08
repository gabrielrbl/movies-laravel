<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmegenerosTable extends Migration {
    public function up() {
        Schema::create('filmegeneros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_filme');
            $table->unsignedBigInteger('id_genero');
            $table->foreign('id_filme')->references('id')->on('filme')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_genero')->references('id')->on('genero')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('filmegeneros');
    }
}
