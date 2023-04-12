<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productos = producto::all();
        return $productos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        //
        $productos = new producto();

        $productos->nombre = $request->nombre;
        $productos->descripcion = $request->descripcion;
        $productos->link = $request->link;
        $productos->imagen = $request->imagen;
        $productos->nombreTienda = $request->nombreTienda;
        $productos->precio = $request->precio;
        $productos->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $productos = producto::findOrFail($request->id);
        $productos->nombre = $request->nombre;
        $productos->descripcion = $request->descripcion;
        $productos->link = $request->link;
        $productos->imagen = $request->imagen;
        $productos->nombreTienda = $request->nombreTienda;
        $productos->precio = $request->precio;
        $productos->save();
        return $productos;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $productos = producto::destroy($request->id);

        return $productos;
    }
}
