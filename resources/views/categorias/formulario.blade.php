@extends('layouts.app')

@section('title', 'Categorias')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Categorias
    <small>Optional description</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Categorias</a></li>
    <li class="active">lista</li>
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
  @if (old('id')??$c->id??'' !== '')
    <form action="/categorias/edita/{{ old('id')??$c->id??'' }}" method="post">
  @else
    <form action="/categorias/adiciona" method="post">
  @endif
  <div class="box box-primary">
      <div class="box-header">
        <a href="{{action('CategoriaController@getIndex')}}" class="btn btn-default">Voltar</a>
        <button class="btn btn-success pull-right" type="submit">Salvar</button>
      </div>

      <div class="box-body">

    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    <input type="hidden" name="id" value="{{ 'id', old('id')??$c->id??'' }}"/>
    <div class="row">
      <div class="col-md-3">
        <div class="form-group">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control" value="{{ old('nome')??$c->nome??'' }}"/>
        </div>
      </div>
      <div class="col-md-2">
        <div class="form-group">
            <label>Cor</label>
            <input type="text" name="cor" class="form-control jscolor" value="{{ old('cor')??$c->cor??'#FFFFFF' }}"/>
        </div>
      </div>
    </div>



  </div>

<div class="box-footer">
  <a href="{{action('CategoriaController@getIndex')}}" class="btn btn-default">Voltar</a>
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
