<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modelc;

class ModelcController extends Controller
{
    public function index()
    {
        $dades = Modelc::all();
        return view('modelcs.index', compact('dades'));
    }

    public function create()
    {
        return view('modelcs.create');
    }

    public function store(Request $request)
    {
        $dada = new Modelc();
        $dada->nom = $request->nom;
        $dada->codi = $request->codi;
        $dada->save();
        return redirect()->route('modelcs.index');
    }

    public function show(Modelc $dada)
    {
        return view('modelcs.show', compact('dada'));
    }

    public function edit(Modelc $dada)
    {
        return view('modelcs.edit', compact('dada'));
    }

    public function update(Request $request, Modelc $dada)
    {
        $this->validate($request, [
            'nom' => 'required',
            'codi' => 'required',
        ]);

        $dada->nom = $request->nom;
        $dada->codi = $request->codi;
        $dada->save();
        return redirect()->route('modelcs.index');
    }

    public function destroy(Modelc $dada)
    {
        $dada->delete();
        return redirect()->route('modelcs.index');
    }   
}
