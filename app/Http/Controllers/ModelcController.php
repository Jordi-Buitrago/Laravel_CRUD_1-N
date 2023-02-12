<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modelc;

class ModelcController extends Controller
{
    public function index()
    {
        $dades = Modelc::all();
        return view('modelcs.index', ['dades' => $dades]);
    }

    public function create()
    {
        return view('modelcs.create');
    }

    public function store(Request $request)
    {
        $dada = new Modelc();
        $dada->nom = $request->nom;
        $dada->places = $request->places;
        $dada->potencia = $request->potencia;
        $dada->consum = $request->consum;
        $dada->cotxe_id = $request->cotxe_id;
        $dada->save();
        return redirect()->route('modelcs.index');
    }

    public function show($nom)
    {
        $dada = Modelc::find($nom);
        return view('modelcs.show', ['dada' => $dada]);
    }


    public function edit($nom)
    {
        $dada = Modelc::find($nom);
        return view('modelcs.edit', ['dada' => $dada]);
    }

    public function update(Request $request, $nom)
    {
        $dada = Modelc::find($nom);
        $dada->nom = $request->nom;
        $dada->places = $request->places;
        $dada->potencia = $request->potencia;
        $dada->consum = $request->consum;
        $dada->cotxe_id = $request->cotxe_id;
        $dada->save();
        return redirect()->route('modelcs.index');
    }

    public function destroy($nom)
    {
        $dada = Modelc::find($nom);
        $dada->delete();
        return redirect()->route('modelcs.index');
    }   
}
