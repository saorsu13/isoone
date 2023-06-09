<?php

namespace App\Http\Controllers;

use App\Models\Proceso;
use Illuminate\Http\Request;

class ProcesoController extends Controller
{

    public function index()
    {
        $procesos=Proceso::all();
        return view('Proceso.index',compact('procesos'));
    }
    public function vistaCrearProceso()
    {
        return view('Proceso.crearProceso');
    }
    public function agregarProceso(Request $request)
    {
        $proceso = new Proceso();
        $proceso -> codigo = $request ->codigo;
        $proceso -> nombre = $request ->nombre;
        $proceso -> departamento_id = 1;
        $proceso -> localizacion_id = 3;

        $proceso ->save();

        return redirect()->route('indexProceso');

    }
    public function editarProceso($id)
    {
        $proceso = Proceso::find($id);
        return view('Proceso.editarProceso', compact('proceso'));
    }
    public function actualizarProceso(Request $request, $id)
    {
        $proceso = Proceso::find($id);
        $proceso->codigo = $request->codigo;
        $proceso->nombre = $request->nombre;
        $proceso -> departamento_id = 1;
        $proceso -> localizacion_id = 3;

        $proceso->save();
        return redirect()->route('indexProceso');
    }
    public function eliminarProceso($id)
    {
        $proceso = Proceso::find($id);
        $proceso->delete();

        return redirect()->route('indexProceso')
            ->with('mensaje', 'La localización se ha eliminado correctamente.');
    }
}
