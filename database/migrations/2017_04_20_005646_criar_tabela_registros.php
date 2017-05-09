<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaRegistros extends Migration
{

    public function up()
    {
      Schema::create('registros', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('id_tipo_registro');
          $table->date('data_entrada');
          $table->integer('valor');
          $table->integer('id_categoria');
          $table->integer('id_responsavel');
          $table->integer('id_conta');
          $table->integer('id_status');
          $table->string('descricao')->nullable();
          $table->timestamps();
      });
    }

    public function down()
    {
        Schema::drop('registros');
    }
}
