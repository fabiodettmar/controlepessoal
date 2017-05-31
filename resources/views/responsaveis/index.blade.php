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
    <li><a href="#"><i class="fa fa-dashboard"></i> Responsáveis</a></li>
    <li class="active">lista</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="box box-primary">
      <div class="box-header">
        <a href="#" class="btn btn-default">Voltar</a>
        <a href="/responsaveis/novo" class="btn btn-primary pull-right">Novo</a>
      </div>

      <div class="box-body">
          @if(old('responsavel'))
          <div class="row">
            <div class="col-md-12">
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Responsavel {{ old('responsavel') }} adicionado com sucesso !!</h4>
              </div>
              Responsavel {{ old('responsavel') }} adicionado com sucesso !!
            </div>
          </div>
          @endif

          <div class="row">
            <div class="col-md-12">
            <table id="lista-usuarios" class="table dataTable table-bordered table-striped table-hover display">
                <thead>
                <tr>
                    <th>@lang('responsaveis.id')</th>
                    <th>@lang('responsaveis.responsavel')</th>
                    <th>@lang('responsaveis.cor')</th>
                    <th>@lang('responsaveis.tipo_responsavel')</th>
                    <th>@lang('responsaveis.acoes')</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($responsaveis as $r)
                      <tr>
                        <td>{{ $r->id }}</td>
                        <td>{{ $r->responsavel }}</td>
                        <td style="background-color:#{{ $r->cor }}">{{ $r->cor }}</td>
                        <td>{{ $r->id_tipo_responsavel }}</td>
                        <td>
                            <a href="/responsaveis/mostra/{{ $r->id }}" class="btn btn-warning btn-xs">Editar</a>
                            <a href="/responsaveis/remove/{{ $r->id }}" class="btn btn-danger btn-xs">Remover</a>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>@lang('responsaveis.id')</th>
                  <th>@lang('responsaveis.responsavel')</th>
                  <th>@lang('responsaveis.cor')</th>
                  <th>@lang('responsaveis.tipo_responsavel')</th>
                  <th>@lang('responsaveis.acoes')</th>
                </tr>
                </tfoot>
            </table>
            </div>
          </div>
        </div>

        <div class="box-footer">
          <a href="#" class="btn btn-default">Voltar</a>
          <a href="/responsaveis/novo" class="btn btn-primary pull-right">Novo</a>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection

@section('scripts.footer')
<script src="{{URL::asset('dist/js/usuarios.js')}}"></script>
@endsection
