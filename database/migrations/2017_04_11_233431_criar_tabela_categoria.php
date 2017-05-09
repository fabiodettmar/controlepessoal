<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaCategoria extends Migration
{

    public function up()
    {
        Schema::create('categorias', function(Blueprint $table)
        {
          $table->increments('id');
          $table->string('nome');
          $table->string('cor');
          $table->timestamps();
        });
    }


    public function down()
    {
        Schema::drop('categorias');
    }
}