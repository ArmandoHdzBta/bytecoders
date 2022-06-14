<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\EtiquetaController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\PublicacionController;


Route::get('/admin',[HomeController::class, 'index'])->name('admin.home');
Route::resource('categorias', CategoriaController::class)->names('admin.categorias');

// Route::get('/admin',[HomeController::class, 'index']);

Route::resource('etiquetas', EtiquetaController::class)->names('admin.etiquetas');
Route::resource('posts', PostController::class)->names('admin.posts');

/*  
/ Rutas de administrador para las publicaciones 
/
*/
Route::get('/admin/publicaciones', [PublicacionController::class, 'index'])->name('admin.publicaciones.index');
Route::get('/admin/publicaciones/crear', [PublicacionController::class, 'crear'])->name('admin.publicaciones.crear');
Route::get('/admin/publicaciones/{id}/editar', [PublicacionController::class, 'editar'])->name('admin.publicaciones.editar');
Route::delete('/admin/publicaciones/{id}', [PublicacionController::class, 'eliminar'])->name('admin.publicaciones.eliminar');

/*
/ Rutas de administrador para las etiquetas
/
*/
Route::get('/admin/etiquetas', [EtiquetaController::class, 'index'])->name('admin.etiquetas.index');
Route::get('/admin/etiquetas/crear', [EtiquetaController::class, 'crear'])->name('admin.etiquetas.crear');
Route::get('/admin/etiquetas/{id}/editar', [EtiquetaController::class, 'editar'])->name('admin.etiquetas.editar');
Route::delete('/admin/etiquetas/{id}', [EtiquetaController::class, 'eliminar'])->name('admin.etiquetas.eliminar');
Route::post('/admin/etiquetas/agregar', [EtiquetaController::class, 'agregar'])->name('admin.etiquetas.agregar');
Route::post('/admin/etiquetas/{id}/actualizar', [EtiquetaController::class, 'actualizar'])->name('admin.etiquetas.actualizar');
Route::put('/admin/etiquetas/{id}/actualizar', [EtiquetaController::class, 'actualizar'])->name('admin.etiquetas.actualizar');

