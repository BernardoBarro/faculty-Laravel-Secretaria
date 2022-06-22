<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patrocinador;
use App\Http\Requests\PatrocinadorRequest;

class PatrocinadorController extends Controller
{
    public function index(){
        $patrocinador = Patrocinador::All();
        return view('patrocinador.index',['patrocinadores' =>$patrocinador]);
    }

    public function create() {
        return view('patrocinador.create');
    }

    public function store(PatrocinadorRequest $request) {
        $novo_patrocinador = $request->all();
        Patrocinador::create($novo_patrocinador);
        return redirect()->route('patrocinador');
    }

    public function destroy($id) {
        Patrocinador::find($id)->delete();
        return redirect()->route('patrocinador');
    }

    public function edit($id) {
       $patrocinador = Patrocinador::find($id);
       return view('patrocinador.edit', compact('patrocinador'));
    }

    public function update(PatrocinadorRequest $request, $id) {
        Patrocinador::find($id)->update($request->all());
       return redirect()->route('patrocinador');
    }
}
