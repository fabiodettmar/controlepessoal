<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterarCampoValorTabelaRegistros extends Migration
{
    public function up()
    {
      Schema::table('registros', function (Blueprint $table) {
        $table->dropColumn('valor');
      });
      Schema::table('registros', function (Blueprint $table) {
        $table->double('valor', 15, 2);
      });
    }

    public function down()
    {
      Schema::table('registros', function (Blueprint $table) {
        $table->dropColumn('valor');
      });
      Schema::table('registros', function (Blueprint $table) {
        $table->integer('valor');
      });
    }
}
