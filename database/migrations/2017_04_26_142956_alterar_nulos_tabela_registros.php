<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterarNulosTabelaRegistros extends Migration
{

    public function up()
    {
      Schema::table('registros', function (Blueprint $table) {
        $table->integer('id_categoria')->nullable()->change();
        $table->integer('id_responsavel')->nullable()->change();
        $table->integer('id_conta')->nullable()->change();
        $table->integer('id_status')->nullable()->change();
    	});
    }

    public function down()
    {
      Schema::table('registros', function (Blueprint $table) {
        $table->integer('id_categoria')->default("")->change();
        $table->integer('id_responsavel')->default("")->change();
        $table->integer('id_conta')->default("")->change();
        $table->integer('id_status')->default("")->change();
    	});
    }
}
