<?php namespace controlepessoal\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Yajra\Datatables\Facades\Datatables;
use controlepessoal\Registro;
use controlepessoal\Categorias;
use controlepessoal\TipoRegistro;
use controlepessoal\Responsavel;
use controlepessoal\Conta;
use controlepessoal\Status;
use Request;
use Validator;
use controlepessoal\Http\Requests\RegistroRequest;
use Lang;

class RegistroController extends Controller {

  public function __construct()
  {
      $this->middleware('autorizador');
  }
  public function getIndex(Request $request)
  {
    $registros = Registro::all();

    return view('registros.index')
      ->with('registros', $registros)
      ->with('categorias', Categorias::all())
      ->with('tipos_registro', TipoRegistro::all())
      ->with('responsaveis', Responsavel::all())
      ->with('contas', Conta::all())
      ->with('status', Status::all());

  }

  public function listarTodos(Request $request)
  {
    $dados = Datatables::eloquent(Registro::leftJoin(Categorias::getTableName(), 'categorias.id', 'id_categoria')
        ->leftJoin(TipoRegistro::getTableName(), 'tipos_registro.id', 'id_tipo_registro')
        ->leftJoin(Responsavel::getTableName(), 'responsaveis.id', 'id_responsavel')
        ->leftJoin(Conta::getTableName(), 'contas.id', 'id_conta')
        ->leftJoin(Status::getTableName(), 'status.id', 'id_status')
        ->select(['registros.id', 'tipos_registro.tipo_registro', 'registros.data_entrada', 'registros.valor', 'categorias.nome as categoria', 'responsaveis.responsavel', 'contas.conta', 'status.status']))->make(true);
    return $dados;
  }
  public function listarUltimos(Request $request)
  {
    $dados = Datatables::eloquent(Registro::leftJoin(Categorias::getTableName(), 'categorias.id', 'id_categoria')
        ->leftJoin(TipoRegistro::getTableName(), 'tipos_registro.id', 'id_tipo_registro')
        ->leftJoin(Responsavel::getTableName(), 'responsaveis.id', 'id_responsavel')
        ->leftJoin(Conta::getTableName(), 'contas.id', 'id_conta')
        ->leftJoin(Status::getTableName(), 'status.id', 'id_status')
        ->select(['registros.id', 'tipos_registro.tipo_registro', 'registros.data_entrada', 'registros.valor', 'registros.descricao', 'categorias.nome as categoria', 'responsaveis.responsavel', 'contas.conta', 'status.status']))
        ->orderBy('data_entrada','DESC')->take(3)->make(true);

    return $dados;
  }

  public function mostra($id) {
    $registros = Registro::find($id);
    return view('registros.formulario')
      ->with('r', $registros)
      ->with('categorias', Categorias::all()->pluck('nome','id'))
      ->with('tipos_registro', TipoRegistro::all()->pluck('tipo_registro', 'id'))
      ->with('responsaveis', Responsavel::all()->pluck('responsavel', 'id'))
      ->with('contas', Conta::all()->pluck('conta', 'id'))
      ->with('status', Status::all()->pluck('status', 'id'));
  }

  public function novo() {
    return view('registros.formulario')
    ->with('categorias', Categorias::all()->pluck('nome','id'))
    ->with('tipos_registro', TipoRegistro::all()->pluck('tipo_registro', 'id'))
    ->with('responsaveis', Responsavel::all()->pluck('responsavel', 'id'))
    ->with('contas', Conta::all()->pluck('conta', 'id'))
    ->with('status', Status::all()->pluck('status', 'id'));
  }

  public function adiciona(RegistroRequest $request) {
    Registro::create($request->all());
    return redirect()->action('RegistroController@getIndex');
  }

  public function remove($id) {
    $registros = Registro::find($id);
    $registros->delete();
    return redirect()->action('RegistroController@getIndex');
  }

  public function edita(RegistroRequest $request, Registro $registro, $id) {
    $this->validate($request, [
      'valor' => 'required',
      'id_tipo_registro' => 'required',
      'data_entrada' => 'required'
    ]);

    Registro::find($id)->update($request->all());

    return redirect()->action('RegistroController@getIndex');
/*
    $data = Input::all();

    if ($registro->validate($data)) {

        if ($registro->update($data)) {
            return redirect()->action('RegistroController@getIndex')
                ->with('sucesso', 'Registro editado com Sucesso!');
        } else {
            return redirect()->back()
                ->withErrors($registro->errors())
                ->withInput(Input::all());
        }
    } else {
        return redirect()->back()
            ->withErrors($registro->errors())
            ->withInput(Input::all());
    }
*/

  }
}
