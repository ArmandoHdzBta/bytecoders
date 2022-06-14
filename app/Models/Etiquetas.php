<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etiquetas extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'slug', 'color'];
     /**
     * 
     * Relacion muchos a muchos con la tabla posts
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function publicaciones(){
        return $this->belongsToMany(Publicaciones::class);
    }
}
