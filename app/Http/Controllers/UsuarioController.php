<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

use function GuzzleHttp\Promise\all;

class UsuarioController extends Controller
{
    /**
     * Funcion usada para registrar un usuario
     * 
     * @param Request $request
     * Parametro nombre: nombre del usuario
     * Parametro email: email del usuario
     * Parametro password: contraseña del usuario
     * @return \Illuminate\Http\Response
     */
    public function crear(Request $request){
        try{
            $validacion = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
            ]);
            if($validacion->fails()){
                Log::channel('precaucion')->info('No se ingresaron todos los campos');
                return redirect()->back()->with('error', 'No se ingresaron todos los campos');
            }
            else{
                User::create($request->all());
                Log::channel('info')->info('Usuario registrado '.$request->email);
                auth();
                return redirect("/inicio");
            }
        }catch(\Exception $e){
            DB::rollback();
            Log::channel('error')->error('Error al crear usuario: '.$e->getMessage());
            Session::flash('message', 'Error al crear el usuario');
            return redirect()->back()->with('error', 'Error al crear el usuario');
        }
    }

    /**
     * Funcion para actualizar el correo de usuario
     * Parametros email: correo antiguo
     * Parametros newEmail: nuevo correo
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function actualizarCorreo(Request $request){
        try{
            $validacion = Validator::make($request->all(), [
                'email' => 'required|email',
                'email_nuevo' => 'required|email',
            ]);
            if ($validacion->fails()) {
                Session::flash('message', 'Faltan datos', $validacion->errors()->first());
                return redirect()->back()->withErrors($validacion->errors());
            }
            $email = User::where('email', $request->email)->first();
            if(!$email){
                Session::flash('message', 'El email no fue encontrado');
                return redirect()->back();
            }
            $user = User::find(auth()->user()->id);
            $user->email = $request->email_nuevo;
            $user->save();
            DB::commit();
            Log::channel('info')->info('Usuario'.$request->email.' ha actualizado con al correo: '.$request->email_nuevo);
            Session::flash('message', 'Correo actualizado correctamente');
            return redirect()->route('index');
        }catch(\Exception $e){
            DB::rollback();
            Log::channel('error')->error('Error al actualizar correo: '.$e->getMessage());
            Session::flash('message', 'Error al actualizar el correo');
        }
    }

    /**
     * Funcion para eliminar un usuario
     * @return \Illuminate\Http\Response
     */
    public function eliminarUsuario(){
        try{
            $user = User::find(auth()->user()->id);
            $user->delete();
            DB::commit();
            Log::channel('info')->info('Usuario'.$user->email.' ha sido eliminado');
            Session::flash('message', 'Usuario eliminado correctamente');
            return redirect()->route('index');
        }catch(\Exception $e){
            DB::rollback();
            Log::channel('error')->error('Error al eliminar usuario: '.$e->getMessage());
            Session::flash('message', 'Error al eliminar el usuario');
        }
    }

    public function login() //retorna la vista de login
    {
        return view('usuarios.login');
    } 

    /* public function store() //recibe los datos del formulario de login, para el registro de usuario
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        $user=User::create(request(['name','email','password']));

        auth()->login($user);
        return redirect('usuarios.login');
    } */

    public function storeinicio()//inicio de sesion de usuario
    {

        if(auth()->attempt(request(['email','password'])) == false)
        {
            return back()->withErrors(['message'=>'El usuario o la contraseña son incorrectos']);
        }
        else
        {
            return redirect()->to('/');
        }
    }

    public function salir()//cierre de sesion de usuario
    {
        auth()->logout();
        return redirect()->to('/login');
    }

    /* public function recuperarContraseniaCorreo($correo){
        $usuario = User::where('email', $correo)->first();
        if($usuario == null){
            return json_encode(["estatus" => "noRegistrado", "correo" => $correo]);
        }
        if((date('Y-m-d') == date('Y-m-d', strtotime($usuario->envio_correo_contrasenia))) &&
            !(date('H:i:s') > date('H:i:s', strtotime('+3 minutes', strtotime($usuario->envio_correo_contrasenia))))){
            return json_encode(["estatus" => "tiempoNoDisponible", "correo" => $correo]);
        }
        $this->recuperarContrasenia($correo);
        $usuario->envio_correo_contrasenia = date('Y-m-d H:i:s');
        $usuario->save();
        return json_encode(["estatus" => "ok", "correo" => $correo]);
    }

    function recuperarContrasenia($correo){
        Mail::to($correo)->send(new RestablecerContrasenia($this->generarUrlReestablecerCorreo($correo)));
    } */
}
