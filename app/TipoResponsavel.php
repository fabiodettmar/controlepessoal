<?php

namespace controlepessoal;

use Illuminate\Database\Eloquent\Model;

class TipoResponsavel extends Base
{
  protected $table = 'tipos_responsavel';
  public $timestamps = true;

  protected $fillable = array('tipo_responsavel');

  public function responsaveis(){
    return $this->belongsTo('controlepessoal\Responsavel');
  }
}
