<?php namespace controlepessoal\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Yajra\Datatables\Facades\Datatables;
use controlepessoal\Usuario;
use controlepessoal\Categorias;
use Request;
use Validator;
use controlepessoal\Http\Requests\UsuarioRequest;
use Lang;

class UsuarioController extends Controller {

  public function __construct() 
  {
      $this->middleware('autorizador');
  }
  public function getIndex(Request $request)
  {
    $usuarios = Usuario::all();
    return view('usuarios.index');
  }
  public function listarTodos(Request $request)
  {
    $dados = Datatables::eloquent(Usuario::leftJoin(Categorias::getTableName(), 'categorias.id', 'categoria_id')
        ->select(['users.id', 'users.name', 'users.email', 'users.cor', 'categorias.nome as categoria']))->make(true);
    return $dados;
  }

  public function mostra($id) {
    $usuarios = Usuario::find($id);
    return view('usuarios.formulario')
      ->with('u', $usuarios)
      ->with('categorias', Categorias::all());
  }

  public function novo() {
    return view('usuarios.formulario')->with('categorias', Categorias::all());
  }

  public function adiciona(UsuarioRequest $request) {
    Usuario::create($request->all());
    return redirect()->action('UsuarioController@getIndex');
  }

  public function remove($id) {
    $usuarios = Usuario::find($id);
    $usuarios->delete();
    return redirect()->action('UsuarioController@getIndex');
  }

  public function edita(UsuarioRequest $request, $id) {
    $this->validate($request, [
      'name' => 'required|min:3',
      'email' => 'required|min:8',
      'password' => 'required|min:6'
    ]);

    Usuario::find($id)->update($request->all());

    return redirect()->action('UsuarioController@getIndex');
  }
}
