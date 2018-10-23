<?php

namespace App\Http\Controllers;

use App\Accesorio;
use Illuminate\Http\Request;
use App\Http\Requests\AccesorioRequest;
use App\Http\Resources\AccesorioResource;

class AccesorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // <=>
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AccesorioRequest $request)
    {
        $accesorio = Accesorio::create($request->validated());
        return new AccesorioResource($accesorio);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Accesorio  $accesorio
     * @return \Illuminate\Http\Response
     */
    public function show(Accesorio $accesorio)
    {
        return new AccesorioResource($accesorio);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  AccesorioRequest  $request
     * @param  \App\Accesorio  $accesorio
     * @return \Illuminate\Http\Response
     */
    public function update(AccesorioRequest $request, Accesorio $accesorio)
    {
        $accesorio->nombre = $request->nombre;
        $accesorio->SKU = $request->SKU;
        $accesorio->descripcion = $request->descripcion;
        $accesorio->categoria_id = $request->categoria_id;
        $accesorio->fabricante_id = $request->fabricante_id;
        $accesorio->pais_id = $request->pais_id;
        $accesorio->save();
        return new AccesorioResource($accesorio);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Accesorio  $accesorio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accesorio $accesorio)
    {
        $accesorio->delete();
        return response()->json([
            'status' => 200,
            'message' => 'Accesorio borrado.'
        ])
    }
}
