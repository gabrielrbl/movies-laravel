<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmeatoresTable extends Migration {
    public function up() {
        Schema::create('filmeatores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('filme_id');
            $table->unsignedBigInteger('ator_id');
            $table->foreign('filme_id')->references('id')->on('filme')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('ator_id')->references('id')->on('ator')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('filmeatores');
    }
}
