<?php

namespace controlepessoal;

use Illuminate\Database\Eloquent\Model;

class Registro extends Base
{
  protected $table = 'registros';
  public $timestamps = true;

  protected $fillable = array('id_tipo_registro', 'data_entrada', 'valor', 'id_categoria', 'id_responsavel', 'id_conta', 'id_status', 'descricao');

  public function categorias() {
    return $this->hasMany('controlepessoal\Categorias');
  }
  public function tipos_registro() {
    return $this->hasMany('controlepessoal\TipoRegistro');
  }
  public function responsaveis() {
    return $this->hasMany('controlepessoal\Responsavel');
  }
  public function contas() {
    return $this->hasMany('controlepessoal\Conta');
  }
  public function status() {
    return $this->hasMany('controlepessoal\Status');
  }
}
