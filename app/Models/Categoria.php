<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','slug'];
    public function getRouteKeyName()
    {
        return "slug";
    }

    /**
     * 
     * Relacion uno a muchos con la tabla posts
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function publicaciones(){
        return $this->hasMany(Publicaciones::class);
     }
}
