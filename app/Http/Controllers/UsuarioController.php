<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\Localizacion;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
       $usuarios = Usuario::all();

        return view('Usuario.index',compact('usuarios'));
    }
    public function vistaCrearUsuario()
    {
        $Localizaciones=Localizacion::all();
        $cargos = Cargo::all();
        return view('Usuario.crearUsuario',compact('Localizaciones','cargos'));
    }
    public function agregarUsuario(Request $request)
    {
        $usuario = new Usuario();
        $usuario->localizacion_id=3;
        $usuario->activo=$request->activo == 'on' ? 1 : 0;
		$usuario->nombre=$request->nombre;
		$usuario->correo_electronico=$request->correoElectronico;
		$usuario->contraseña=$request->contraseña;
		$usuario->rol=$request->rol;
        $usuario->cargo=$request->cargo;
		$usuario->localizacion_usuario=$request->localizacionUsuario;
		
        $usuario->save();

        return redirect()->route('indexUsuario',compact('usuario'));

    }
    public function editarUsuario($id)
    {
        $usuario = Usuario::find($id);
        return view('Usuario.editarUsuario', compact('usuario'));
    }
    public function actualizarUsuario(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        $usuario->localizacion_id=3;
        $usuario->activo=$request->activo == 'on' ? 1 : 0;
		$usuario->nombre=$request->nombre;
		$usuario->correo_electronico=$request->correoElectronico;
		$usuario->contraseña=$request->contraseña;
		$usuario->rol=$request->rol;
        $usuario->cargo=$request->cargo;
		$usuario->localizacion_usuario=$request->localizacionUsuario;

        $usuario->save();
        return redirect()->route('indexUsuario');
    }
    public function eliminarUsuario($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();

        return redirect()->route('indexUsuario')
            ->with('mensaje', 'La localización se ha eliminado correctamente.');
    }
}
