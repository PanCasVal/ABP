<?php

namespace App\Http\Controllers;

use App\Models\Comprador;
use Illuminate\Http\Request;

class CompradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return 'hola';
        $compradores=Comprador::all();
        return view('compradores.index', compact('compradores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('compradores.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'ap_p' => 'required',
            'ap_m' => 'required',
            'correo' => 'required',
        ]);
        Comprador::create($request->all());

        return redirect()->route('compradores.index')
            ->with('success', 'Resgistro exitoso!!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comprador  $comprador
     * @return \Illuminate\Http\Response
     */
    public function show(Comprador $comprador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comprador  $comprador
     * @return \Illuminate\Http\Response
     */
    public function edit(Comprador $compradore)
    {
        return view('compradores.edit',compact('compradore'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comprador  $comprador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comprador $compradore)
    {
        $request->validate([
            'nombre' => 'required',
            'ap_p' => 'required',
            'ap_m' => 'required',
            'correo' => 'required',
        ]);
        $compradore->update($request->all());

        return redirect()->route('compradores.index')
            ->with('success', 'Resgistro exitoso!!.');
        //return 'hola';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comprador  $comprador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comprador $compradore)
    {
        //return 'hola';
        $compradore->delete();
        return redirect()->route("compradores.index")->with("success","Empleado eliminado corectamente");
    }
}
