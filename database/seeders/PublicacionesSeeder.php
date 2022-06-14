<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Publicaciones;
use App\Models\Imagen;

class PublicacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Publicaciones::factory(20)->create();

       foreach ($posts as $post) {
           Imagen::factory(1)->create([
               'imageable_id' => $post->id,
                'imageable_type' => Publicaciones::class,
           ]);
           $post->etiquetas()->attach([
                rand(1,4),
                rand(5,8),
           ]);
       }
    }
}
