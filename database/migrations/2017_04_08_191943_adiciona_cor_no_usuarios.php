<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionaCorNoUsuarios extends Migration
{

    public function up()
    {
        Schema::table('usuarios', function($table) {
          $table->string('cor', 10)->default('#FFFFFF');
        });
    }


    public function down()
    {
      Schema::table('usuarios', function($table) {
        $table->dropColumn('cor');
      });
    }
}
