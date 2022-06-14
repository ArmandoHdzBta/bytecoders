<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Publicaciones;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Etiquetas;
use App\Http\Requests\StorePublicacionRequest;

class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.publicaciones.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        $categorias = Categoria::pluck('nombre','id');
        $etiquetas = Etiquetas::all();

        return view('Publicaciones.crearpublicacion', compact('categorias','etiquetas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function nuevaPublicacion(Request $request)
    {
        $post = Publicaciones::create($request->all());

        if ($request->tags) {
            $post->tags()->attach($request->tags);
        }
        return redirect()->route('home')->with('success', 'Publicación creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Publicaciones $publicacion)
    {
        return view('admin.publicaciones.ver', compact('publicacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Publicaciones $publicacion)
    {
        return view('admin.publicaciones.editar', compact('publicacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publicaciones $publicacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publicaciones $publicacion)
    {
        //
    }
}
