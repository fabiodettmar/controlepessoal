<?php

namespace controlepessoal;

use Illuminate\Database\Eloquent\Model;

class Conta extends Base
{
  protected $table = 'contas';
  public $timestamps = true;

  protected $fillable = array('conta');

  public function registros(){
    return $this->belongsTo('controlepessoal\Registro');
  }
}
