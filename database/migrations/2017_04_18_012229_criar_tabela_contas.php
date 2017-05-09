<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaContas extends Migration
{

    public function up()
    {
      Schema::create('contas', function(Blueprint $table)
      {
        $table->increments('id');
        $table->string('conta');
        $table->timestamps();
      });
    }

    public function down()
    {
        Schema::drop('contas');
    }
}
