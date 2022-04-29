<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;
use App\Http\Resources\Libro as LibroResource;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Libro = Libro::all();
        return LibroResource::collection($Libro);
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
        //$Libro = $request->isMethod('put') ? Libro::findOrFail($request->id) : new Alimento;
        //$Libro->id = $request->input('id');
        $Libro = new Libro();
        $Libro-> = $request->Nombre;
        $Libro->cod_Libro = $request->cod_Libro;
        $Libro->isbn= $request->isbn;
        $Libro->titulo= $request->titulo;
        $Libro->annio_publicacion= $request->annio_publicacion;
        $Libro->precio_venta= $request->precio_venta;
        $Libro->descripcion= $request->descripcion;

        $Libro ->save();
/*
        if($Libro->save()){
            return new LibroResource($Libro);
       }

       */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Libro $Libro
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //obtener un registro de alimento para acceder por medio de la ruta
        $Libro = Libro::findOrFail($id);
        /* retornar los datos del registro obtenido */
        return new LibroResource($Libro);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Libro  $Libro
     * @return \Illuminate\Http\Response
     */
    public function edit(Libro $Libro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Libro  $Libro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $alimento = Alimento::findOrFail($request->id);
        
        
        $Libro-> = $request->Nombre;
        $Libro->cod_Libro = $request->cod_Libro;
        $Libro->isbn= $request->isbn;
        $Libro->titulo= $request->titulo;
        $Libro->annio_publicacion= $request->annio_publicacion;
        $Libro->precio_venta= $request->precio_venta;
        $Libro->descripcion= $request->descripcion;

        $Libro->save();
        return $Libro;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Libro  $Libro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $Libro = Libro::destroy($request -> id);
        return $Libro;
    }
}
