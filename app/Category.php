<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
// proteger para envio de datos masivos los campos de la base de dtos si tenemos un campo adicional que no se quiere que se ve el usuario no puede forzar ese campo 
	protected $fillable = [

		
		'name',
		'slug',
		
		'body',
		

	];

    // relaciones a nivel de laravel para que laravel genere esas relaciones correctamente en cada migracion 

	public function posts(){ // posts en plural por que cada Category tiene muchas   posts

			// hasMany de uno a muchos
    	return $this->hasMany(Post::class); // de 1 a muchos ' la Category  tiene muchos posts es decir 300 Category son 900 posts cada Category tiene 3 posts  '
    }
  

}
