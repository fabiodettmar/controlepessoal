<?php

namespace controlepessoal;

use Illuminate\Database\Eloquent\Model;

class Responsavel extends Base
{
  protected $table = 'responsaveis';
  public $timestamps = true;

  protected $fillable = array('responsavel', 'id_tipo_responsavel', 'cor');

  public function tipos_responsavel() {
    return $this->hasMany('controlepessoal\TipoResponsavel');
  }

  public function registros(){
    return $this->belongsTo('controlepessoal\Registro');
  }
}
