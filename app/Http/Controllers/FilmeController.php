<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Filme;

class FilmeController extends Controller {
    public function index(){
        $filmes = Filme::latest()->paginate();
        return view('filme.index', ["filmes" => $filmes]);
    }

    public function create() {
        return view('filme.create');
    }

    public function store(Request $request) {
        $data = $request->all();

        Filme::create($data);

        return redirect()->route('filme.index');
    }

    public function show($id){
        $filme = Filme::find($id);

        if (!$filme)
            return redirect()->back();

        return view('filme.show', ['filme' => $filme]);
    }

    public function edit($id) {
        $filme = Filme::find($id);
        if (!$filme)
            return redirect()->back();

        return view('filme.edit', compact('filme'));
    }

    public function update(Request $request, $id) {
        $filme = Filme::find($id);

        if (!$filme)
            return redirect()->back();

        $data = $request->all();

        $filme->update($data);

        return redirect()->route('filme.index');
    }

    public function destroy($id) {
        $filme = Filme::where('id', $id)->first();

        if (!$filme)
            return redirect()->back();

        $filme->delete();

        return redirect()->route('filme.index');
    }
}
