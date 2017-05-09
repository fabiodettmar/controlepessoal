<?php

namespace controlepessoal;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Base
{
  protected $table = 'categorias';
  public $timestamps = true;

  protected $fillable = array('nome', 'cor');

  public function usuarios(){
    return $this->belongsTo('controlepessoal\Usuario');
  }
  public function registros(){
    return $this->belongsTo('controlepessoal\Registro');
  }
}
