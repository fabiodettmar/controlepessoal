@extends('layouts.app')

@section('title', 'Tipos de Registro')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Tipos de Registro
    <small>Optional description</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Tipos de Registro</a></li>
    <li class="active">lista</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="box box-primary">
      <div class="box-header">
        <a href="#" class="btn btn-default">Voltar</a>
        <a href="/tipos_registro/novo" class="btn btn-primary pull-right">Novo</a>
      </div>

      <div class="box-body">
          @if(old('tipo_registro'))
          <div class="row">
            <div class="col-md-12">
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> { old('tipo_registro') }} adicionado com sucesso !!</h4>
              </div>
              {{ old('tipo_registro') }} adicionado com sucesso !!
            </div>
          </div>
          @endif

          <div class="row">
            <div class="col-md-12">
            <table id="lista-usuarios" class="table dataTable table-bordered table-striped table-hover display">
                <thead>
                <tr>
                    <th>@lang('tipos_registro.id')</th>
                    <th>@lang('tipos_registro.conta')</th>
                    <th>@lang('tipos_registro.acoes')</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($tiposregistro as $t)
                      <tr>
                        <td>{{ $t->id }}</td>
                        <td>{{ $t->tipo_registro }}</td>
                        <td>
                            <a href="/tipos_registro/mostra/{{ $t->id }}" class="btn btn-warning btn-xs">Editar</a>
                            <a href="/tipos_registro/remove/{{ $t->id }}" class="btn btn-danger btn-xs">Remover</a>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>@lang('tipos_registro.id')</th>
                  <th>@lang('tipos_registro.conta')</th>
                  <th>@lang('tipos_registro.acoes')</th>
                </tr>
                </tfoot>
            </table>
            </div>
          </div>
        </div>

        <div class="box-footer">
          <a href="#" class="btn btn-default">Voltar</a>
          <a href="/tipos_registro/novo" class="btn btn-primary pull-right">Novo</a>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection

@section('scripts.footer')
<script src="{{URL::asset('dist/js/usuarios.js')}}"></script>
@endsection
