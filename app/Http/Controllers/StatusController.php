<?php namespace controlepessoal\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use controlepessoal\Status;
use Request;
use Validator;
use controlepessoal\Http\Requests\StatusRequest;
use Lang;

class StatusController extends Controller {

  public function __construct()
  {
      $this->middleware('autorizador');
  }
  public function getIndex(Request $request)
  {
    $status = Status::all();
    return view('status.index')
      ->with('status', $status);
  }

  public function mostra($id) {
    $status = Status::find($id);
    return view('status.formulario')
      ->with('s', $status);
  }

  public function novo() {
    return view('status.formulario');
  }

  public function adiciona(StatusRequest $request) {
    Status::create($request->all());
    return redirect()->action('StatusController@getIndex');
  }

  public function remove($id) {
    $status = Status::find($id);
    $status->delete();
    return redirect()->action('StatusController@getIndex');
  }

  public function edita(StatusRequest $request, $id) {
    $this->validate($request, [
      'status' => 'required|min:3',
      'cor' => 'required|min:4'
    ]);

    Status::find($id)->update($request->all());

    return redirect()->action('StatusController@getIndex');
  }
}
