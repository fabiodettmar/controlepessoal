@extends('layouts.app')

@section('title', 'Responsaveis')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Responsaveis
    <small>Optional description</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Responsaveis</a></li>
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
  @if (old('id')??$r->id??'' !== '')
    <form action="/responsaveis/edita/{{ old('id')??$r->id??'' }}" method="post">
  @else
    <form action="/responsaveis/adiciona" method="post">
  @endif
  <div class="box box-primary">
      <div class="box-header">
        <a href="{{action('ResponsavelController@getIndex')}}" class="btn btn-default">Voltar</a>
        <button class="btn btn-success pull-right" type="submit">Salvar</button>
      </div>

      <div class="box-body">


    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    <input type="hidden" name="id" value="{{ 'id', old('id')??$r->id??'' }}"/>
    <div class="row">
      <div class="col-md-3">
        <div class="form-group">
            <label>Responsavel</label>
            <input type="text" name="responsavel" class="form-control" value="{{ old('responsavel')??$r->responsavel??'' }}"/>
        </div>
      </div>
      <div class="col-md-2">
        <div class="form-group">
            <label>Cor</label>
            <input type="text" name="cor" class="form-control jscolor" value="{{ old('cor')??$r->cor??'#FFFFFF' }}"/>
        </div>
      </div>
      <div class="col-md-2">
        <div class="form-group">
            <label>Tipo de Responsavel</label>
            <select type="text" name="id_tipo_responsavel" class="form-control" >
              @foreach($tipos_responsavel as $t)
              <option value="{{$t->id}}">{{$t->tipo_responsavel}}</option>
              @endforeach
            </select>
        </div>
      </div>

    </div>



  </div>

<div class="box-footer">
  <a href="{{action('ResponsavelController@getIndex')}}" class="btn btn-default">Voltar</a>
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
