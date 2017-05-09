<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaTiposRegistro extends Migration
{

    public function up()
    {
      Schema::create('tipos_registro', function(Blueprint $table)
      {
        $table->increments('id');
        $table->string('tipo_registro');
        $table->timestamps();
      });
    }


    public function down()
    {
        Schema::drop('tipos_registro');
    }
}
