<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //


    public function posts(){ // posts en plural por que cada Tag tiene muchas   posts

    		// belongsToMany  Tag tiene y pertenece a muchos posts relacion de muchos a muchos

    	return $this->belongsToMany(Tag::class); // de muchos a muchos ' el Tag pertenece y tiene muchos posts es decir 300 Tag son 900 posts cada Tag tiene 3 posts  '
    }
}
