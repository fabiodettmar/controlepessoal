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
  <div class="box box-primary">
      <div class="box-header">
        <a href="#" class="btn btn-default">Voltar</a>
        <a href="/tipos_responsavel/novo" class="btn btn-primary pull-right">Novo</a>
      </div>

      <div class="box-body">
          @if(old('tipo_responsavel'))
          <div class="row">
            <div class="col-md-12">
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> { old('tipo_responsavel') }} adicionado com sucesso !!</h4>
              </div>
              {{ old('tipo_responsavel') }} adicionado com sucesso !!
            </div>
          </div>
          @endif

          <div class="row">
            <div class="col-md-12">
            <table id="lista-usuarios" class="table dataTable table-bordered table-striped table-hover display">
                <thead>
                <tr>
                    <th>@lang('tipos_responsavel.id')</th>
                    <th>@lang('tipos_responsavel.conta')</th>
                    <th>@lang('tipos_responsavel.acoes')</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($tiposresponsavel as $t)
                      <tr>
                        <td>{{ $t->id }}</td>
                        <td>{{ $t->tipo_responsavel }}</td>
                        <td>
                            <a href="/tipos_responsavel/mostra/{{ $t->id }}" class="btn btn-warning btn-xs">Editar</a>
                            <a href="/tipos_responsavel/remove/{{ $t->id }}" class="btn btn-danger btn-xs">Remover</a>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>@lang('tipos_responsavel.id')</th>
                  <th>@lang('tipos_responsavel.conta')</th>
                  <th>@lang('tipos_responsavel.acoes')</th>
                </tr>
                </tfoot>
            </table>
            </div>
          </div>
        </div>

        <div class="box-footer">
          <a href="#" class="btn btn-default">Voltar</a>
          <a href="/tipos_responsavel/novo" class="btn btn-primary pull-right">Novo</a>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection

@section('scripts.footer')
<script src="{{URL::asset('dist/js/usuarios.js')}}"></script>
@endsection
