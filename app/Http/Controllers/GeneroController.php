<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Genero;

class GeneroController extends Controller {
    public function index(){

    }

    public function create() {

    }

    public function store() {

    }

    public function show($id) {
        $genero = Genero::find($id);
        return view('genero.show', array('genero' => $genero));
    }

    public function edit($id) {

    }

    public function update($id) {

    }

    public function destroy($id) {
        
    }
}
