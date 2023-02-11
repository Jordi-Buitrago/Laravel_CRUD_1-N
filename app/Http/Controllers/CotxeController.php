<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cotxe;

class CotxeController extends Controller
{
    public function index()
    {
        $dades = Cotxe::all();
        return view('cotxes.index', ['dades' => $dades]);
    }

    public function create()
    {
        return view('cotxes.create');
    }

    public function store(Request $request)
    {
        $dada = new Cotxe();
        $dada->nom = $request->nom;
        $dada->codi = $request->codi;
        $dada->save();
        return redirect()->route('cotxes.index');
    }

    public function show(Request $req)
    {
        $cotxe = Cotxe::find($req->id);
        return $req;
       // return view('cotxes.show', ['dada' => $cotxe]);
    }

    public function edit(Cotxe $cotxe)
    {
            return $cotxe;
       // return view('cotxes.edit', ['dada' => $dada]);
    }

    public function update(Request $request, Cotxe $dada)
    {
        $this->validate($request, [
            'nom' => 'required',
            'codi' => 'required',
        ]);

        $dada->nom = $request->nom;
        $dada->codi = $request->codi;
        $dada->save();
        return redirect()->route('cotxes.index');
    }

    public function destroy(Cotxe $dada)
    {
        $dada->delete();
        return redirect()->route('cotxes.index');
    }
}
