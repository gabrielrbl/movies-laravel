<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtorTable extends Migration {
    public function up() {
        Schema::create('ator', function (Blueprint $table) {
            $table->id();
            $table->char('nome', 255);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('ator');
    }
}
