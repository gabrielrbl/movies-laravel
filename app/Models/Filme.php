<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model {
    protected $table = 'filme';
    protected $fillable = ['titulo', 'resumo'];

    public function generos() {
        return $this->belongsToMany('App\Models\Genero', 'filmegeneros');
    }
    
    public function atores() {
        return $this->belongsToMany('App\Models\Ator', 'filmeatores');
    }
}
