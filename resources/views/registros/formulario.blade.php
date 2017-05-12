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
  @if (!empty($r))
    {!! Form::open(['action' => ['RegistroController@edita', $r->id], 'method' => 'PUT',  'id'=>'form']) !!}
  @else
    {!! Form::open(['action' => 'RegistroController@adiciona', 'id'=>'form']) !!}
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
            {{ Form::label('id_tipo_registro', 'Tipo de Registro') }}
            {!! Form::select('id_tipo_registro', $tipos_registro, old('id_tipo_registro')??$r->id_tipo_registro??'', ['class' => 'form-control select2', 'id' => 'id_tipo_registro', 'placeholder' => 'Selecione...']) !!}
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
          {{ Form::label('id_categoria', 'Categoria') }}
          {!! Form::select('id_categoria', $categorias, old('id_categoria')??$r->id_categoria??'', ['class' => 'form-control select2', 'id' => 'id_categoria', 'placeholder' => 'Selecione...']) !!}
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
          {{ Form::label('id_responsavel', 'Responsavel') }}
          {!! Form::select('id_responsavel', $responsaveis, old('id_responsavel')??$r->id_responsavel??'', ['class' => 'form-control select2', 'id' => 'id_responsavel', 'placeholder' => 'Selecione...']) !!}
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
        {{ Form::label('id_conta', 'Conta') }}
        {!! Form::select('id_conta', $contas, old('id_conta')??$r->id_conta??'', ['class' => 'form-control select2', 'id' => 'id_conta', 'placeholder' => 'Selecione...']) !!}
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          {{ Form::label('id_status', 'Status') }}
          {!! Form::select('id_status', $status, old('id_status')??$r->id_status??'', ['class' => 'form-control select2', 'id' => 'id_status', 'placeholder' => 'Selecione...']) !!}
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
{!! Form::close() !!}
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
