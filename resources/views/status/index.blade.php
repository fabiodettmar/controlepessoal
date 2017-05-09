@extends('layouts.app')

@section('title', 'Status')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Status
    <small>Optional description</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Status</a></li>
    <li class="active">lista</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="box box-primary">
      <div class="box-header">
        <a href="#" class="btn btn-default">Voltar</a>
        <a href="/status/novo" class="btn btn-primary pull-right">Novo</a>
      </div>

      <div class="box-body">
          @if(old('nome'))
          <div class="row">
            <div class="col-md-12">
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Categoria {{ old('nome') }} adicionado com sucesso !!</h4>
              </div>
              Categoria {{ old('nome') }} adicionado com sucesso !!
            </div>
          </div>
          @endif

          <div class="row">
            <div class="col-md-12">
            <table id="lista-usuarios" class="table dataTable table-bordered table-striped table-hover display">
                <thead>
                <tr>
                    <th>@lang('status.id')</th>
                    <th>@lang('status.status')</th>
                    <th>@lang('status.cor')</th>
                    <th>@lang('status.acoes')</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($status as $s)
                      <tr>
                        <td>{{ $s->id }}</td>
                        <td>{{ $s->status }}</td>
                        <td style="background-color:{{ $s->cor }}">{{ $s->cor }}</td>
                        <td>
                            <a href="/status/mostra/{{ $s->id }}" class="btn btn-warning btn-xs">Editar</a>
                            <a href="/status/remove/{{ $s->id }}" class="btn btn-danger btn-xs">Remover</a>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>@lang('status.id')</th>
                  <th>@lang('status.status')</th>
                  <th>@lang('status.cor')</th>
                  <th>@lang('status.acoes')</th>
                </tr>
                </tfoot>
            </table>
            </div>
          </div>
        </div>

        <div class="box-footer">
          <a href="#" class="btn btn-default">Voltar</a>
          <a href="/status/novo" class="btn btn-primary pull-right">Novo</a>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection

@section('scripts.footer')
<script src="{{URL::asset('dist/js/usuarios.js')}}"></script>
@endsection
