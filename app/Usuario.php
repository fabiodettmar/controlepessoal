<?php

namespace controlepessoal;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Base
{
  protected $table = 'users';
  public $timestamps = true;

  protected $fillable = array('name', 'cor', 'email', 'password', 'categoria_id');

  public function categorias() {
    return $this->hasMany('controlepessoal\Categorias');
  }

}
