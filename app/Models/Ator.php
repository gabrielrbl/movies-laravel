<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ator extends Model {
    protected $table = 'ator';

    public function filmes() {
        return $this->belongsToMany('App\Models\Filme', 'filmeatores');
    }
}
