<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaResponsaveis extends Migration
{

    public function up()
    {
      Schema::create('responsaveis', function(Blueprint $table)
      {
        $table->increments('id');
        $table->string('responsavel');
        $table->integer('id_tipo_responsavel');
        $table->string('cor');
        $table->timestamps();
      });
    }


    public function down()
    {
        Schema::drop('responsaveis');
    }
}
