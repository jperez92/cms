<?php

use Illuminate\Database\Seeder;

class post extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  cada vez que se cree un Post de los 300 va existir una funcion y pasamos en la funcion es Post que se esta creando en las llaves se relaciona $post 'pp\Post::class, 1.2.3.4....300)->create()' con public function tags(){ la funcion en la entidad a utilizar en este caso Post y lo relacionamos con attach con tres valores aleatorio osea tres etiquetas por cada post ->attach([ rand(1,5),rand(6,14),rand(15,20),

        factory(App\Post::class, 300)->create()->each(function(App\Post $post){
            $post->tags()->attach([
                rand(1,5),
                rand(6,14),
                rand(15,20),
            ]);
        });

    }
}
