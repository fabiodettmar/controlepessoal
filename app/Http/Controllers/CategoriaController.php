<?php namespace controlepessoal\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use controlepessoal\Categorias;
use Request;
use Validator;
use controlepessoal\Http\Requests\CategoriaRequest;
use Lang;

class CategoriaController extends Controller {

  public function __construct()
  {
      $this->middleware('autorizador');
  }
  public function getIndex(Request $request)
  {
    $categorias = Categorias::all();
    return view('categorias.index')
      ->with('categorias', $categorias);
  }

  public function mostra($id) {
    $categorias = Categorias::find($id);
    return view('categorias.formulario')
      ->with('c', $categorias);
  }

  public function novo() {
    return view('categorias.formulario');
  }

  public function adiciona(CategoriaRequest $request) {
    Categorias::create($request->all());
    return redirect()->action('CategoriaController@getIndex');
  }

  public function remove($id) {
    $categorias = Categorias::find($id);
    $categorias->delete();
    return redirect()->action('CategoriaController@getIndex');
  }

  public function edita(CategoriaRequest $request, $id) {
    $this->validate($request, [
      'nome' => 'required|min:3',
      'cor' => 'required|min:4'
    ]);

    Categorias::find($id)->update($request->all());

    return redirect()->action('CategoriaController@getIndex');
  }
}
