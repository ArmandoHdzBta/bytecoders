<?php

use Illuminate\Support\Facades\Route;
/* use App\Models\User; */
/* use App\Http\Controllers\loginController; */
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\pruebascontoller;
use App\Models\Publicaciones;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\PublicacionController;
use App\Http\Controllers\PublicacionesController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/**
 *
 * Ruta de inicio de sesion y registro
 */
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');



/**
 *
 * login con redes sociales
 */

//facebook login

// Route::get('/login-facebook', function () {
//     return Socialite::driver('facebook')->redirect();
// })->name('login_facebook');

// Route::get('/facebook-callback', function(){
//     $user= Socialite::driver('facebook')->user();

//     dd($user);
// });


// Rutas del blog
Route::get('/auth', function () {
    $posts = Publicaciones::all();
    return view('usuarios.index', compact('posts'));
})->middleware('auth');

Route::get('/sobre-nosotros', function() {
    return view('usuarios.sobrenosotros');
})->name('sobrenosotros');

Route::get('/contacto', function() {
    return view('usuarios.contacto');
})->name('contacto');

/**
 *
 * Rutas de recuperar contraseña
 */
/* Route::get('/RecuperarContraseñaCorreo/{email}', [UsuarioController::class, 'recuperarContraseniaCorreo'])->name('recuperar.Contraseña.correo'); */



// Recuperar contraseña
Route::get('/recuperar', function() {
    return view('usuarios.recuperar');
})->name('recuperar');

Route::get('/restablecer', function() {
    return view('usuarios.restablecer');
})->name('restablecer');

/**
 *  Ruta para Crear nuevo usuario
 *
 */
Route::post('/registrar', [UsuarioController::class, 'crear'])->name('usuarios.crear');

Route::get('/editar', function() {
    return view('editar.editarperfil');
});

/**
 * Rutas para posts
 */
// Route::get('/publicacion/crear', function() {
//     return view('Publicaciones.crearpublicacion');
// })->name('publicacion.crear');

Route::get('/publicacion/crear', [PublicacionController::class, 'crear'])->name('publicacion.crear');
Route::post('/publicacion/nueva', [PublicacionController::class, 'nuevaPublicacion'])->name('publicacion.nueva');

//Rutas de prueba

// Route::get('/', function() {
//     return view('usuarios.index');
// })->name('index');

Route::get('/publicacion', function() {
    return view('publicaciones.publicacionsencilla');
})->name('publicacion');

Route::get('/catalogo', function() {
    return view('publicaciones.catalogo');
})->name('catalogo');

Route::get('/perfil', function() {
    return view('usuarios.perfil');
})->name('perfil');

Route::get('/', [PublicacionesController::class, 'index'])->name('index');
//registrarse
/* Route::get('/sesion', [UsuarioController::class, 'login'])->middleware('guest')->name('login.index'); */
/* Route::post('/login', [UsuarioController::class, 'store'])->name('login.store'); *///recibe los datos del formulario de login

//inicio de sesion
/* Route::post('/login', [UsuarioController::class, 'storeinicio'])->middleware('guest')->name('login.storeinicio'); *///ruta de inicio de sesion del usuario

//cierre de sesion del usuario
/* Route::get('/salir', [UsuarioController::class, 'salir'])->middleware('auth')->name('login.salir');//ruta de cierre de sesion del usuario */


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
