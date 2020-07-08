<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ator;

class AtorController extends Controller {
    public function index(){
        $atores = Ator::all();
        return view('ator.index', ["atores" => $atores]);
    }

    public function create() {

    }

    public function store() {

    }

    public function show($id) {
        $ator = Ator::find($id);
        return view('ator.show', array('ator' => $ator));
    }

    public function edit($id) {

    }

    public function update($id) {

    }

    public function destroy($id) {
        
    }
}
