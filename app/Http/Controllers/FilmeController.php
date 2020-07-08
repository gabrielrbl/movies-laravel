<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Filme;

class FilmeController extends Controller {
    public function index(){
        $filmes = Filme::all();
        return view('filme.index', ["filmes" => $filmes]);
    }

    public function create() {

    }

    public function store() {

    }

    public function show($id){
        $filme = Filme::find($id);
        return view('filme.show', ["filme" => $filme]);
    }

    public function edit($id) {

    }

    public function update($id) {

    }

    public function destroy($id) {
        
    }
}
