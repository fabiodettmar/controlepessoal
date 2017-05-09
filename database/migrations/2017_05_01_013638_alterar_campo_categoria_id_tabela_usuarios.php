<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterarCampoCategoriaIdTabelaUsuarios extends Migration
{

    public function up()
    {
      Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('categoria_id');
      });
      Schema::table('users', function (Blueprint $table) {
        $table->integer('categoria_id')->unsigned();
        $table->foreign('categoria_id')
          ->references('id')->on('categorias');          
      });
    }

    public function down()
    {
      Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('categoria_id');
      });
      Schema::table('users', function (Blueprint $table) {
        $table->integer('categoria_id');
      });
    }
}
