@extends('layouts.app')

@section('title', 'Usuarios')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Usuarios
    <small>Optional description</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Usuarios</a></li>
    <li class="active">lista</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="box box-primary">
      <div class="box-header">
        <a href="#" class="btn btn-default">Voltar</a>
      </div>

      <div class="box-body">
        <div class="row">
          <div class="col-md-12">
              <h1>Detalhes do  Usuário {{ $u->name }}</h1>
              <ul>
                <li>Cor: {{ $u->cor }}</li>
                <li>Email: {{ $u->email }}</li>
                <li>Senha: {{ $u->password }}</li>
              </ul>
          </div>
        </div>
      </div>
      <div class="box-footer">
        <a href="#" class="btn btn-default">Voltar</a>
      </div>
    </div>

</section>
<!-- /.content -->
@endsection

@section('scripts.footer')
<script src="{{URL::asset('dist/js/usuarios.js')}}"></script>
@endsection
