@extends('layouts.app')

@section('content')
<div class="principal" style="padding:10px;">
    <div class="row">
        <div class="col-md-6">
            <h3>Últimos Registros</h3>
            <table id="lista-ultimos-registros" class="table dataTable table-bordered table-striped table-hover display">
                <thead>
                    <tr>
                        <th>@lang('registros.tipo_registro')</th>
                        <th>@lang('registros.data_entrada')</th>
                        <th>@lang('registros.valor')</th>
                        <th>@lang('registros.descricao')</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('scripts.footer')
<script src="{{URL::asset('dist/js/home.js')}}"></script>
@endsection
