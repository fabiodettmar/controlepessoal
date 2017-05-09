<?php

namespace controlepessoal;

use Illuminate\Database\Eloquent\Model;

class Status extends Base
{
  protected $table = 'status';
  public $timestamps = true;

  protected $fillable = array('status', 'cor');

  public function registros(){
    return $this->belongsTo('controlepessoal\Registro');
  }
}
