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
  <div class="box box-primary">
      <div class="box-header">
        <a href="#" class="btn btn-default">Voltar</a>
        <a href="/contas/novo" class="btn btn-primary pull-right">Novo</a>
      </div>

      <div class="box-body">
          @if(old('nome'))
          <div class="row">
            <div class="col-md-12">
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Conta {{ old('conta') }} adicionado com sucesso !!</h4>
              </div>
              Conta {{ old('conta') }} adicionado com sucesso !!
            </div>
          </div>
          @endif

          <div class="row">
            <div class="col-md-12">
            <table id="lista-usuarios" class="table dataTable table-bordered table-striped table-hover display">
                <thead>
                <tr>
                    <th>@lang('contas.id')</th>
                    <th>@lang('contas.conta')</th>
                    <th>@lang('contas.acoes')</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($contas as $c)
                      <tr>
                        <td>{{ $c->id }}</td>
                        <td>{{ $c->conta }}</td>
                        <td>
                            <a href="/contas/mostra/{{ $c->id }}" class="btn btn-warning btn-xs">Editar</a>
                            <a href="/contas/remove/{{ $c->id }}" class="btn btn-danger btn-xs">Remover</a>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>@lang('contas.id')</th>
                  <th>@lang('contas.conta')</th>
                  <th>@lang('contas.acoes')</th>
                </tr>
                </tfoot>
            </table>
            </div>
          </div>
        </div>

        <div class="box-footer">
          <a href="#" class="btn btn-default">Voltar</a>
          <a href="/contas/novo" class="btn btn-primary pull-right">Novo</a>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection

@section('scripts.footer')
<script src="{{URL::asset('dist/js/usuarios.js')}}"></script>
@endsection
