@extends('layouts.app')

@section('title', 'Registros')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Registros
    <small>Entrada e Saída</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">lista de Registros</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  @foreach($errors->all() as $error)
  <div class="alert alert-danger">
    <ul>
        <li>{{ $error }}</li>
    </ul>
  </div>
  @endforeach
  @if (old('id')??$r->id??'' !== '')
    <form id="form" action="/registros/edita/{{ old('id')??$r->id??'' }}" method="post">
  @else
    <form id="form" action="/registros/adiciona" method="post">
  @endif
  <div class="box box-primary">
      <div class="box-header">
        <a href="{{action('RegistroController@getIndex')}}" class="btn btn-default">Voltar</a>
        <button class="btn btn-success pull-right" type="submit">Salvar</button>
      </div>

      <div class="box-body">

    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    <input type="hidden" name="id" value="{{ 'id', old('id')??$r->id??'' }}"/>

    <div class="row">
        <div class="col-md-8">

    <div class="row">
      <div class="col-md-5">
        <div class="form-group">
            <label>Tipo de Registro</label>
            <select type="text" name="id_tipo_registro" class="form-control select2" >
              <option value="">Selecione ...</option>
              @foreach($tipos_registro as $t)
              <option value="{{$t->id}}">{{$t->tipo_registro}}</option>
              @endforeach
            </select>
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
            <label>Data de Entrada</label>
            <input type="text" name="data_entrada" class="form-control datedropper" data-format="Y-m-d" data-lang="pt" value="{{ old('data_entrada')??$r->data_entrada??'' }}"/>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
            <label>Valor</label>
            <input type="text" id="valor" name="valor" data-thousands="." data-decimal="," data-prefix="R$ " class="form-control moeda" value="{{ old('valor')??$r->valor??'' }}"/>
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
            <label>Categoria</label>
            <select type="text" name="id_categoria" class="form-control select2" >
              <option value="">Selecione ...</option>
              @foreach($categorias as $c)
              <option value="{{$c->id}}">{{$c->nome}}</option>
              @endforeach
            </select>
        </div>
      </div>
      <div class="col-md-9">
        <div class="form-group">
            <label>Descricao</label>
            <input type="text" name="descricao" class="form-control" value="{{ old('descricao')??$r->descricao??'' }}"/>
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-group">
            <label>Responsável</label>
            <select type="text" name="id_responsavel" class="form-control select2" >
              <option value="">Selecione ...</option>
              @foreach($responsaveis as $r)
              <option value="{{$r->id}}">{{$r->responsavel}}</option>
              @endforeach
            </select>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
            <label>Conta</label>
            <select type="text" name="id_conta" class="form-control select2" >
              <option value="">Selecione ...</option>
              @foreach($contas as $c)
              <option value="{{$c->id}}">{{$c->conta}}</option>
              @endforeach
            </select>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
            <label>Status</label>
            <select type="text" name="id_status" class="form-control select2" >
              <option value="">Selecione ...</option>
              @foreach($status as $s)
              <option value="{{$s->id}}">{{$s->status}}</option>
              @endforeach
            </select>
        </div>
      </div>


    </div>

        </div>
        <div class="col-4"></div>
    </div>

  </div>

<div class="box-footer">
  <a href="{{action('RegistroController@getIndex')}}" class="btn btn-default">Voltar</a>
  <button class="btn btn-success pull-right" type="submit">Salvar</button>
</div>
</form>
</div>

</section>
<!-- /.content -->
@endsection

@section('scripts.footer')
<script src="{{URL::asset('dist/js/usuarios.js')}}"></script>
<script>
$("#form").submit(function(){
  var value = $('#valor').maskMoney('unmasked')[0];
  $('#valor').val(value);
});
</script>
@endsection
