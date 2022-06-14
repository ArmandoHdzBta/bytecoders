<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicaciones extends Model
{
    use HasFactory;

    protected $guarded = ['id','create_at','update_at'];
    /**
     * Relacion uno a muchos inversa con la tabla usuario
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->belongsTo(User::class);
    }

    /**
     * Relacion uno a muchos con la tabla categoria
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    /**
     * Relacion muchos a muchos con la tabla tags
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
     */
    public function etiquetas(){
        return $this->belongsToMany(Etiquetas::class);
    }

    /**
     * Relacion uno a uno  polimorfica
     *
     * @return \Illuminate\Database\Eloquent\Relations\morphOne
     */
    public function imagenes(){
        return $this->morphOne(Imagen::class, 'imageable'); 
    }
}
