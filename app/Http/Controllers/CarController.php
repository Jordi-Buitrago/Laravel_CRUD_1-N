<?php

namespace App\Http\Controllers;

use App\Models\Cotxe;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dades = Cotxe::all();
        return view('cotxes.index', ['dades' => $dades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cotxes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dada = new Cotxe();
        $dada->id = $request->id;
        $dada->marca = $request->marca;
        $dada->color = $request->color;
        $dada->any = $request->any;
        $dada->preu = $request->preu;
        $dada->save();
        return redirect()->route('cotxes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cotxe  $cotxe
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dada = Cotxe::find($id);
        return view('cotxes.show', ['dada' => $dada]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cotxe  $cotxe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dada = Cotxe::find($id);
        return view('cotxes.edit', ['dada' => $dada]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cotxe  $cotxe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dada = Cotxe::find($id);
        $dada->marca = $request->marca;
        $dada->color = $request->color;
        $dada->any = $request->any;
        $dada->preu = $request->preu;
        $dada->save();
        return redirect()->route('cotxes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cotxe  $cotxe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dada = Cotxe::find($id);
        $dada->delete();
        return redirect()->route('cotxes.index');
    }
}
