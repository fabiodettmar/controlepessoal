@extends('layouts.app')

@section('title', 'Contas')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Contas
    <small>Optional description</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Contas</a></li>
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
  @if (old('id')??$c->id??'' !== '')
    <form action="/contas/edita/{{ old('id')??$c->id??'' }}" method="post">
  @else
    <form action="/contas/adiciona" method="post">
  @endif
  <div class="box box-primary">
      <div class="box-header">
        <a href="{{action('ContaController@getIndex')}}" class="btn btn-default">Voltar</a>
        <button class="btn btn-success pull-right" type="submit">Salvar</button>
      </div>

      <div class="box-body">

    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    <input type="hidden" name="id" value="{{ 'id', old('id')??$c->id??'' }}"/>
    <div class="row">
      <div class="col-md-3">
        <div class="form-group">
            <label>Conta</label>
            <input type="text" name="conta" class="form-control" value="{{ old('conta')??$c->conta??'' }}"/>
        </div>
      </div>
    </div>



  </div>

<div class="box-footer">
  <a href="{{action('ContaController@getIndex')}}" class="btn btn-default">Voltar</a>
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
