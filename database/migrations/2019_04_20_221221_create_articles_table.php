<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('content');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('category_id')->unsigned();

            //Referenciando tablas
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); //Se hace referencia a la columna id de la tabla "users"
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade'); //Se hace referencia a la columna id de la tabla "categories"

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
        Schema::dropIfExists('articles');
    }
}
