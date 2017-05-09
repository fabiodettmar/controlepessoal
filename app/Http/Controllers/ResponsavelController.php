<?php namespace controlepessoal\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use controlepessoal\Responsavel;
use controlepessoal\TipoResponsavel;
use Request;
use Validator;
use controlepessoal\Http\Requests\ResponsavelRequest;
use Lang;

class ResponsavelController extends Controller {

  public function __construct()
  {
      $this->middleware('autorizador');
  }
  public function getIndex(Request $request)
  {
    $responsaveis = Responsavel::all();
    return view('responsaveis.index')
      ->with('responsaveis', $responsaveis)
      ->with('tipos_responsavel', TipoResponsavel::all());
  }

  public function mostra($id) {
    $responsaveis = Responsavel::find($id);
    return view('responsaveis.formulario')
      ->with('r', $responsaveis)
      ->with('tipos_responsavel', TipoResponsavel::all());
  }

  public function novo() {
    return view('responsaveis.formulario')->with('tipos_responsavel', TipoResponsavel::all());
  }

  public function adiciona(ResponsavelRequest $request) {
    Responsavel::create($request->all());
    return redirect()->action('ResponsavelController@getIndex');
  }

  public function remove($id) {
    $responsaveis = Responsavel::find($id);
    $responsaveis->delete();
    return redirect()->action('ResponsavelController@getIndex');
  }

  public function edita(ResponsavelRequest $request, $id) {
    $this->validate($request, [
      'responsavel' => 'required|min:3',
      'cor' => 'required|min:4'
    ]);

    Responsavel::find($id)->update($request->all());

    return redirect()->action('ResponsavelController@getIndex');
  }
}
