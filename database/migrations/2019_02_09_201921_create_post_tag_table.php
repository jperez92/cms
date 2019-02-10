<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_tag', function (Blueprint $table) {
            $table->increments('id');

            
            $table->integer('post_id')->unsigned();
            $table->integer('tag_id')->unsigned();
                // un post puede estar relaconado con una etiqueta


                // relaciones 
             $table->foreign('post_id')->references('id')->on('posts') 
                ->onDelete('cascade')
                ->onUpdate('cascade');
                //  'post_id' va hacer referencia a el 'id' de la tabla 'posts'. Si eliminamos un 'post_id'  se eliminara todos los post_tag de esa 'post_id' igual si lo actualizamos se actualizaran todos los datos de los post de ese 'post_id'

            $table->foreign('tag_id')->references('id')->on('tags')
                ->onDelete('cascade')
                ->onUpdate('cascade');
                 //  'tag_id' va hacer referencia a el 'id' de la tabla 'tags'. Si eliminamos un 'tag_id'  se eliminara todos los post_tag de esa 'tag_id' igual si lo actualizamos se actualizaran todos los datos de los post de ese 'tag_id'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_tag');
    }
}
