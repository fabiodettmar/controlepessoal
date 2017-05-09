<?php

namespace controlepessoal;

use Illuminate\Database\Eloquent\Model;

class TipoRegistro extends Base
{
  protected $table = 'tipos_registro';
  public $timestamps = true;

  protected $fillable = array('tipo_registro');

  public function registros(){
    return $this->belongsTo('controlepessoal\Registro');
  }
}
