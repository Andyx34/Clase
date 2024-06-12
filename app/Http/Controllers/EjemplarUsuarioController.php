<?php

namespace App\Http\Controllers;

use App\Models\Ejemplar;
use App\Models\Usuario;
use Illuminate\Http\Request;

class EjemplarUsuarioController extends Controller
{
    public function asociar(){
        $ejemplares=Ejemplar::all();
        $usuarios=Usuario::all();
        return view('ejemplar_usuario.asociar',compact('ejemplares','usuarios'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ejemplar=Ejemplar::find($request->ejemplar_id);
        $ejemplar->usuarios()->attach($request->usuario_id);

        return 'datos guardados';
    }
}
