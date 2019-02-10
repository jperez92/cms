<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');

            
            // un posts le pertenese a un usuario y tambien a una categoria

            $table->integer('user_id')->unsigned();  // insigned no permite numeros negativos
            $table->integer('category_id')->unsigned(); // insigned no permite numeros negativos

             $table->String('name', 128);//mismo tamaño para la url slug o rastro
            $table->String('slug', 128)->inique(); //mismo tamaño para la url name 

            $table->mediumText('excerpt')->nullable();
            $table->text('body');
            $table->enum('status',['PUBLISHED', 'DRAFT'])->default('DRAFT'); // dos posibles valores publicado y borrador por defecto borrador
            $table->String('file', 128)->nullable(); // file para la imagen y no es obligatoria

            // relaciones de user_id y category_id

            $table->foreign('user_id')->references('id')->on('users') 
                ->onDelete('cascade')
                ->onUpdate('cascade');
                //  'user_id' va hacer referencia a el 'id' de la tabla 'users'. Si eliminamos un 'user_id'  se eliminara todos los post de esa 'user_id' igual si lo actualizamos se actualizaran todos los datos de los post de ese 'user_id'

            $table->foreign('category_id')->references('id')->on('categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');
                //  'category_id' va hacer referencia a el 'id' de la tabla 'categories'. Si eliminamos un 'category_id'  se eliminara todos los post de esa 'category_id' igual si lo actualizamos se actualizaran todos los datos de los post de ese 'category_id'

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
        Schema::dropIfExists('posts');
    }
}
