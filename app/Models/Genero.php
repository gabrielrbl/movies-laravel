<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model {
    protected $table = 'genero';

    public function filmes() {
        return $this->belongsToMany('App\Models\Filme', 'filmegeneros');
    }
}
