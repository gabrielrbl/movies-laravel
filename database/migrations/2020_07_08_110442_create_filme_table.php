<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmeTable extends Migration {
    public function up() {
        Schema::create('filme', function (Blueprint $table) {
            $table->id();
            $table->string('titulo')->unique();
            $table->text('resumo');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('filme');
    }
}
