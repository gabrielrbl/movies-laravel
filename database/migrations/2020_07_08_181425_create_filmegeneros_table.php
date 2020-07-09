<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmegenerosTable extends Migration {
    public function up() {
        Schema::create('filmegeneros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('filme_id');
            $table->unsignedBigInteger('genero_id');
            $table->foreign('filme_id')->references('id')->on('filme')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('genero_id')->references('id')->on('genero')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('filmegeneros');
    }
}
