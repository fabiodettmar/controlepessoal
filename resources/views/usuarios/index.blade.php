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
        <a href="/usuarios/novo" class="btn btn-primary pull-right">Novo</a>
      </div>

      <div class="box-body">
          @if(old('nome'))
          <div class="row">
            <div class="col-md-12">
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Usuário {{ old('name') }} adicionado com sucesso !!</h4>
              </div>
              Usuário {{ old('name') }} adicionado com sucesso !!
            </div>
          </div>
          @endif

          <div class="row">
            <div class="col-md-12">
            <table id="lista-usuarios" class="table dataTable table-bordered table-striped table-hover display">
                <thead>
                <tr>
                    <th>@lang('usuarios.id')</th>
                    <th>@lang('usuarios.nome')</th>
                    <th>@lang('usuarios.cor')</th>
                    <th>@lang('usuarios.email')</th>
                    <th>@lang('usuarios.categoria')</th>
                    <th>@lang('usuarios.acoes')</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
                <tfoot>
                <tr>
                  <th>@lang('usuarios.data.id')</th>
                  <th>@lang('usuarios.nome')</th>
                  <th>@lang('usuarios.cor')</th>
                  <th>@lang('usuarios.email')</th>
                  <th>@lang('usuarios.categoria')</th>
                  <th>@lang('usuarios.acoes')</th>
                </tr>
                </tfoot>
            </table>
            </div>
          </div>
        </div>

        <div class="box-footer">
          <a href="#" class="btn btn-default">Voltar</a>
          <a href="/usuarios/novo" class="btn btn-primary pull-right">Novo</a>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection

@section('scripts.footer')
<script src="{{URL::asset('dist/js/usuarios.js')}}"></script>
@endsection
