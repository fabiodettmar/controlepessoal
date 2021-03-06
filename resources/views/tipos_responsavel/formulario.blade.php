@extends('layouts.app')

@section('title', 'Tipos de Responsavel')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Tipos de Responsavel
    <small>Optional description</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Tipos de Responsavel</a></li>
    <li class="active">lista</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="alert alert-danger">
    <ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    </ul>
  </div>
  @if (old('id')??$t->id??'' !== '')
    <form action="/tipos_responsavel/edita/{{ old('id')??$t->id??'' }}" method="post">
  @else
    <form action="/tipos_responsavel/adiciona" method="post">
  @endif
  <div class="box box-primary">
      <div class="box-header">
        <a href="{{action('TipoResponsavelController@getIndex')}}" class="btn btn-default">Voltar</a>
        <button class="btn btn-success pull-right" type="submit">Salvar</button>
      </div>

      <div class="box-body">

    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    <input type="hidden" name="id" value="{{ 'id', old('id')??$t->id??'' }}"/>
    <div class="row">
      <div class="col-md-3">
        <div class="form-group">
            <label>Tipo de Responsavel</label>
            <input type="text" name="tipo_responsavel" class="form-control" value="{{ old('tipo_responsavel')??$t->tipo_responsavel??'' }}"/>
        </div>
      </div>
    </div>



  </div>

<div class="box-footer">
  <a href="{{action('TipoResponsavelController@getIndex')}}" class="btn btn-default">Voltar</a>
  <button class="btn btn-success pull-right" type="submit">Salvar</button>
</div>
</form>
</div>

</section>
<!-- /.content -->
@endsection

@section('scripts.footer')
<script src="{{URL::asset('dist/js/usuarios.js')}}"></script>
@endsection
