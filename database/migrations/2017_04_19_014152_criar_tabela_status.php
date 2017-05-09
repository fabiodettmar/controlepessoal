<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaStatus extends Migration
{

    public function up()
    {
      Schema::create('status', function(Blueprint $table)
      {
        $table->increments('id');
        $table->string('status');
        $table->string('cor');
        $table->timestamps();
      });
    }


    public function down()
    {
        Schema::drop('status');
    }
}
