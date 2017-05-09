@extends('layouts.app')

@section('title', 'Registros')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Registros
    <small>Optional description</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Registros</a></li>
    <li class="active">lista</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="box box-primary">
      <div class="box-header">
        <a href="#" class="btn btn-default">Voltar</a>
        <a href="/registros/novo" class="btn btn-primary pull-right">Novo</a>
      </div>

      <div class="box-body">


          <div class="row">
            <div class="col-md-12">
            <table id="lista-registros" class="table dataTable table-bordered table-striped table-hover display">
                <thead>
                <tr>
                    <th>@lang('registros.id')</th>
                    <th>@lang('registros.tipo_registro')</th>
                    <th>@lang('registros.data_entrada')</th>
                    <th>@lang('registros.valor')</th>
                    <th>@lang('registros.categoria')</th>
                    <th>@lang('registros.responsavel')</th>
                    <th>@lang('registros.conta')</th>
                    <th>@lang('registros.status')</th>
                    <th>@lang('registros.acoes')</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
                <tfoot>
                <tr>
                  <th>@lang('registros.id')</th>
                  <th>@lang('registros.tipo_registro')</th>
                  <th>@lang('registros.data_entrada')</th>
                  <th>@lang('registros.valor')</th>
                  <th>@lang('registros.categoria')</th>
                  <th>@lang('registros.responsavel')</th>
                  <th>@lang('registros.conta')</th>
                  <th>@lang('registros.status')</th>
                  <th>@lang('registros.acoes')</th>
                </tr>
                </tfoot>
            </table>
            </div>
          </div>
        </div>

        <div class="box-footer">
          <a href="#" class="btn btn-default">Voltar</a>
          <a href="/registros/novo" class="btn btn-primary pull-right">Novo</a>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection

@section('scripts.footer')
<script src="{{URL::asset('dist/js/registros.js')}}"></script>
@endsection
