<?php namespace controlepessoal\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use controlepessoal\Conta;
use Request;
use Validator;
use controlepessoal\Http\Requests\ContaRequest;
use Lang;

class ContaController extends Controller {

  public function __construct()
  {
      $this->middleware('autorizador');
  }
  public function getIndex(Request $request)
  {
    $contas = Conta::all();
    return view('contas.index')
      ->with('contas', $contas);
  }

  public function mostra($id) {
    $contas = Conta::find($id);
    return view('contas.formulario')
      ->with('c', $contas);
  }

  public function novo() {
    return view('contas.formulario');
  }

  public function adiciona(ContaRequest $request) {
    Conta::create($request->all());
    return redirect()->action('ContaController@getIndex');
  }

  public function remove($id) {
    $contas = Conta::find($id);
    $contas->delete();
    return redirect()->action('ContaController@getIndex');
  }

  public function edita(ContaRequest $request, $id) {
    $this->validate($request, [
      'conta' => 'required|min:3'
    ]);

    Conta::find($id)->update($request->all());

    return redirect()->action('ContaController@getIndex');
  }
}
