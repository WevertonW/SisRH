<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function index(Request $request){
        $departamentos = Departamento::where('nome','like','%'.$request->buscaDepartamento.'%')->orderBy('descricao','asc')->get();
        $totalDepartamento = Departamento::all()->count();
        return view('departamentos.index', compact('departamentos', 'totalDepartamento'));
    }

    public function create(){
        return view('departamentos.create');
    }
}
