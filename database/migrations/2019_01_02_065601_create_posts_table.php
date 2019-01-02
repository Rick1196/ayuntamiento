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
            $table->integer('image_id')->unsigned();;
            $table->integer('seccion_id')->unsigned();;
            $table->string('titulo');
            $table->string('subtitulo');
            $table->text('contenido');
            $table->text('link');
            $table->foreign('image_id')->references('id')->on('images');
            $table->foreign('seccion_id')->references('id')->on('secciones');
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
