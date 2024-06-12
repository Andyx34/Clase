<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libro=Libro::orderBy('id','asc')->get();
        return view('libro.index',compact('libro'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('libro.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $libro=new Libro();
        $libro->codigos=$request->codigos;
        $libro->titulo=$request->titulo;
        $libro->isbn=$request->isbn;
        $libro->editorial=$request->editorial;
        $libro->numero_paginas=$request->numero_paginas;

        $libro->save();

        return view('libro.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Libro $libro)
    {
        return view('libro.show',compact('libro'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Libro $libro)
    {
        return view('libro.edit',compact('libro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Libro $libro)
    {

        $libro->codigos=$request->codigos;
        $libro->titulo=$request->titulo;
        $libro->isbn=$request->isbn;
        $libro->editorial=$request->editorial;
        $libro->numero_paginas=$request->numero_paginas;

        $libro->save();

        return redirect()->route('libro.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Libro $libro)
    {
        $libro->delete();
        return redirect()->route('libro.index');
    }
    }
