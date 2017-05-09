<?php namespace controlepessoal\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use controlepessoal\TipoRegistro;
use Request;
use Validator;
use controlepessoal\Http\Requests\TipoRegistroRequest;
use Lang;

class TipoRegistroController extends Controller {

  public function __construct()
  {
      $this->middleware('autorizador');
  }
  public function getIndex(Request $request)
  {
    $tiposregistro = TipoRegistro::all();
    return view('tipos_registro.index')
      ->with('tiposregistro', $tiposregistro);
  }

  public function mostra($id) {
    $tiposregistro = TipoRegistro::find($id);
    return view('tipos_registro.formulario')
      ->with('t', $tiposregistro);
  }

  public function novo() {
    return view('tipos_registro.formulario');
  }

  public function adiciona(TipoRegistroRequest $request) {
    TipoRegistro::create($request->all());
    return redirect()->action('TipoRegistroController@getIndex');
  }

  public function remove($id) {
    $tiposregistro = TipoRegistro::find($id);
    $tiposregistro->delete();
    return redirect()->action('TipoRegistroController@getIndex');
  }

  public function edita(TipoRegistroRequest $request, $id) {
    $this->validate($request, [
      'tipo_registro' => 'required|min:3'
    ]);

    TipoRegistro::find($id)->update($request->all());

    return redirect()->action('TipoRegistroController@getIndex');
  }
}
