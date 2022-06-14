<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicaciones;

class PublicacionesController extends Controller
{
    public function index(){
        $publicaciones = Publicaciones::where('status',2)->get();
        return view('usuarios.index', compact('publicaciones'));

    }
}
