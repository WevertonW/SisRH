<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    public function index(Request $request){
        $cargos = Cargo::where('descricao','like','%'.$request->buscaCargo.'%')->orderBy('descricao','asc')->get();
        $totalCargo = Cargo::all()->count();
        return view('cargos.index', compact('cargos','totalCargo'));
    }

    public function create(){
        return view('cargos.create');
    }
}
