<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) { //catregorias es el nombre de la tabla que se creará
            $table->increments('id'); //estas son las columnas de dichas tabals (en este caso ees el auto increment del id)
            $table->string('nombre');
            $table->string('descripcion')->nullable();
            $table->timestamps(); // este siempre va al final porque es el created_at y el updated_at (autmoaticos)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorias');
    }
}
ELIMINA EL QUE ESTABAS HACIENDO PARA EMPEZAR DE CERO ok
