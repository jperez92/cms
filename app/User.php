<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

     // relaciones a nivel de laravel para que laravel genere esas relaciones correctamente en cada migracion 

    public function posts(){ // posts en plural por que cada User tiene muchas   posts

            // hasMany de uno a muchos
        return $this->hasMany(Post::class); // de 1 a muchos ' la User  tiene muchos posts es decir 300 User son 900 posts cada User tiene 3 posts  '
    }
}
