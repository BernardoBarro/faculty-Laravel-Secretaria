<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cargo;
use App\Http\Requests\CargoRequest;

class CargoController extends Controller
{
    public function index(){
        $cargo = Cargo::All();
        return view('cargo.index',['cargos' =>$cargo]);
    }

    public function create() {
        return view('cargo.create');
    }

    public function store(CargoRequest $request) {
        $novo_cargo = $request->all();
        Cargo::create($novo_cargo);
        return redirect()->route('cargo');
    }

    public function destroy($id) {
        Cargo::find($id)->delete();
        return redirect()->route('cargo');
    }

    public function edit($id) {
       $cargo = Cargo::find($id);
       return view('cargo.edit', compact('cargo'));
    }

    public function update(CargoRequest $request, $id) {
       Cargo::find($id)->update($request->all());
       return redirect()->route('cargo');
    }
}