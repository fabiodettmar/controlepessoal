<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaTiposResponsavel extends Migration
{

    public function up()
    {
      Schema::create('tipos_responsavel', function(Blueprint $table)
      {
        $table->increments('id');
        $table->string('tipo_responsavel');
        $table->timestamps();
      });
    }


    public function down()
    {
        Schema::drop('tipos_responsavel');
    }
}
