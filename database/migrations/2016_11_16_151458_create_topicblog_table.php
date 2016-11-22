<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicblogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topicblog', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->longtext('contenido'); 
            $table->integer('users_id'); //esta es otra practica casi a huevo, tenes que opner el nombre de la tabla _  y el nombre de la columna
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
        Schema::dropIfExists('topicblog');
    }
}
