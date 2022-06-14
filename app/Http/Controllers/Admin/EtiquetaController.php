<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Etiquetas;

class EtiquetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etiquetas = Etiquetas::all();
        return view('admin.etiqueta.index', compact('etiquetas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        $colores = [
            'blue' => 'Azul',
            'red' => 'Rojo',
            'green' => 'Verde',
            'yellow' => 'Amarillo',
            'purple' => 'Morado'
        ];
        return view('admin.etiqueta.crear', compact('colores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function agregar(Request $request)
    {
        $request->validate( [
            'nombre' => 'required',
            'slug' => 'required|unique:etiquetas',
            'color' => 'required'
        ]);
        $etiqueta = Etiquetas::create($request->all());
        return redirect()->route('admin.etiquetas.index')->with('mensaje', 'Etiqueta creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $Etiqueta
     * @return \Illuminate\Http\Response
     */
    public function show(Etiquetas $etiqueta)
    {
        return view('admin.etiqueta.ver', compact('etiqueta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $Etiqueta
     * @return \Illuminate\Http\Response
     */
    public function editar( $id)
    {
        $colores = [
            'blue' => 'Azul',
            'red' => 'Rojo',
            'green' => 'Verde',
            'yellow' => 'Amarillo',
            'purple' => 'Morado'
        ];
        $etiqueta = Etiquetas::findOrFail($id);
        return view('admin.etiqueta.editar', compact('etiqueta','colores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $Etiqueta
     * @return \Illuminate\Http\Response
     */
    public function actualizar(Request $request, Etiquetas $etiqueta)
    {
        $request->validate( [
            'nombre' => 'required',
            'slug' => 'required',
            'color' => 'required'
        ]);

        //actualizar el registro con solo el nombre slug y color
        $update = Etiquetas::where('id', $request->id)->update([
            'nombre' => $request->nombre,
            'slug' => $request->slug,
            'color' => $request->color
        ]);
        if ($update) {
            return redirect()->route('admin.etiquetas.index')->with('mensaje', 'Etiqueta actualizada correctamente');
        } else {
            return redirect()->route('admin.etiquetas.index')->with('error', 'Error al actualizar la etiqueta');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $Etiqueta
     * @return \Illuminate\Http\Response
     */
    public function eliminar(Request $request, Etiquetas $etiqueta)
    {
        //encontrar el registro y eliminarlo
        $delete = $etiqueta::findOrFail($request->id)->delete();
        if ($delete) {
            return redirect()->route('admin.etiquetas.index')->with('mensaje', 'Etiqueta eliminada correctamente');
        } else {
            return redirect()->route('admin.etiquetas.index')->with('error', 'Error al eliminar la etiqueta');
        }
    }
}
