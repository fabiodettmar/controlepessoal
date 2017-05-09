<?php

use Illuminate\Database\Seeder;
use controlepessoal\Categorias;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call(CategoriasTableSeeder::class);
    }
}

class CategoriasTableSeeder extends Seeder {
  public function run()
  {
      Categorias::create(['nome' => 'Teste 2', 'cor' => '#000']);
      Categorias::create(['nome' => 'VIP', 'cor' => '#ccff00']);
      Categorias::create(['nome' => 'Especial', 'cor' => '#FD1589']);
  }
}
