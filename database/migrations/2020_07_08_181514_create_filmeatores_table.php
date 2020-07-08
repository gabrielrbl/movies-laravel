<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmeatoresTable extends Migration {
    public function up() {
        Schema::create('filmeatores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_filme');
            $table->unsignedBigInteger('id_ator');
            $table->foreign('id_filme')->references('id')->on('filme')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_ator')->references('id')->on('ator')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('filmeatores');
    }
}
