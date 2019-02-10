<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class PageController extends Controller
{
    public function blog(){

    	// posts es igual a la entidad Post ordenamos con el id desendete siempre y cuando el estatus sea Published y pagina de 3 en 3

    	$posts= Post::orderBy('id','DESC')->where('status','PUBLISHED')->paginate(3); 

    	return view('web.posts',compact('posts'));
    }


    public function post ($slug){
    	return view('web.post',compact('slug'));
    }
}
