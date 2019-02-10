<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

// proteger para envio de datos masivos los campos de la base de dtos si tenemos un campo adicional que no se quiere que se ve el usuario no puede forzar ese campo 
	protected $fillable = [

		'user_id',
		'category_id',
		'name',
		'slug',
		'excerpt',
		'body',
		'status',
		'file',


	];

    // relaciones a nivel de laravel lpara que laravel genere esas relaciones correctamente en cada migracion 

   


    public function usuario(){ // usuario en singular por que cada post tiene un solo usuario

    		// belongsTo tiene y la relacion es de 1 a 1

    	return $this->belongsTo(User::class); // 1 a 1 ' el post pertenece y tiene un solo usuario es decir 1 post es de 1 ususario cada post tiene 1 solo ususario'
    }


    public function categoria(){ // categoria en singular por que cada post tiene un solo categoria

    		// belongsTo tiene y la relacion es de 1 a 1
    		
    	return $this->belongsTo(Category::class); // 1 a 1 ' el post pertenece y tiene un solo categoria es decir 1 post es de 1 ususario cada post tiene 1 solo ususario'


}

	 public function tags(){ // tags en plural por que cada Post tiene muchas   tags

    		// belongsToMany  Post tiene y pertenece a muchos tags relacion de muchos a muchos

    	return $this->belongsToMany(Tag::class); // de muchos a muchos ' el Post pertenece y tiene muchos tag es decir 300 Post son 900 tas cada post tiene 3 tag  '
    }

}
