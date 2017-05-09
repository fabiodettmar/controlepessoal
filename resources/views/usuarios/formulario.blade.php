@extends('layouts.app')

@section('title', 'Usuarios')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Usuários
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">lista de usuários</li>
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
  @if (old('id')??$u->id??'' !== '')
    <form action="/usuarios/edita/{{ old('id')??$u->id??'' }}" method="post">
  @else
    <form action="/usuarios/adiciona" method="post">
  @endif
  <div class="box box-primary">
      <div class="box-header">
        <a href="{{action('UsuarioController@getIndex')}}" class="btn btn-default">Voltar</a>
        <button class="btn btn-success pull-right" type="submit">Salvar</button>
      </div>

      <div class="box-body">


    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    <input type="hidden" name="id" value="{{ 'id', old('id')??$u->id??'' }}"/>
    <div class="row">
      <div class="col-md-3">
        <div class="form-group">
            <label>Nome</label>
            <input type="text" name="name" class="form-control" value="{{ old('name')??$u->name??'' }}"/>
        </div>
      </div>
      <div class="col-md-2">
        <div class="form-group">
            <label>Cor</label>
            <input type="text" name="cor" class="form-control jscolor" value="{{ old('cor')??$u->cor??'#FFFFFF' }}"/>
        </div>
      </div>
      <div class="col-md-2">
        <div class="form-group">
            <label>Categoria</label>
            <select type="text" name="categoria_id" class="form-control" >
              @foreach($categorias as $c)
              <option value="{{$c->id}}">{{$c->nome}}</option>
              @endforeach
            </select>
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
            <label>E-mail</label>
            <input type="text" name="email" class="form-control" value="{{ old('email')??$u->email??'' }}"/>
        </div>
      </div>
      <div class="col-md-2">
        <div class="form-group">
            <label>Senha</label>
            <input type="password" name="password" class="form-control" value="{{ old('password')??$u->password??'' }}"/>
        </div>
      </div>
    </div>



  </div>

<div class="box-footer">
  <a href="{{action('UsuarioController@getIndex')}}" class="btn btn-default">Voltar</a>
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
