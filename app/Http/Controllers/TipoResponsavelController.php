<?php namespace controlepessoal\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use controlepessoal\TipoResponsavel;
use Request;
use Validator;
use controlepessoal\Http\Requests\TipoResponsavelRequest;
use Lang;

class TipoResponsavelController extends Controller {

  public function __construct()
  {
      $this->middleware('autorizador');
  }
  public function getIndex(Request $request)
  {
    $tiposresponsavel = TipoResponsavel::all();
    return view('tipos_responsavel.index')
      ->with('tiposresponsavel', $tiposresponsavel);
  }

  public function mostra($id) {
    $tiposresponsavel = TipoResponsavel::find($id);
    return view('tipos_responsavel.formulario')
      ->with('t', $tiposresponsavel);
  }

  public function novo() {
    return view('tipos_responsavel.formulario');
  }

  public function adiciona(TipoResponsavelRequest $request) {
    TipoResponsavel::create($request->all());
    return redirect()->action('TipoResponsavelController@getIndex');
  }

  public function remove($id) {
    $tiposresponsavel = TipoResponsavel::find($id);
    $tiposresponsavel->delete();
    return redirect()->action('TipoResponsavelController@getIndex');
  }

  public function edita(TipoResponsavelRequest $request, $id) {
    $this->validate($request, [
      'tipo_responsavel' => 'required|min:3'
    ]);

    TipoResponsavel::find($id)->update($request->all());

    return redirect()->action('TipoResponsavelController@getIndex');
  }
}
