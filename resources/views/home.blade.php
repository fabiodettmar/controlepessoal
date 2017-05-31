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
        <div class="col-md-6">
          <div id="canvas-holder" style="width:100%">
              <canvas id="chart-area" />
          </div>
        </div>
    </div>
</div>
@endsection
@section('scripts.footer')
<script src="{{URL::asset('dist/js/home.js')}}"></script>

<script>
    var randomScalingFactor = function() {
        return Math.round(Math.random() * 100);
    };

    var config = {
        type: 'doughnut',
        data: {
            datasets: [{
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                ],
                backgroundColor: [
                    window.chartColors.red,
                    window.chartColors.orange,
                    window.chartColors.yellow,
                    window.chartColors.green,
                    window.chartColors.blue,
                ],
                label: 'Dataset 1'
            }],
            labels: [
                "Red",
                "Orange",
                "Yellow",
                "Green",
                "Blue"
            ]
        },
        options: {
            responsive: true,
            legend: {
                position: 'bottom',
            },
            title: {
                display: true,
                text: 'Despesas do mês'
            },
            animation: {
                animateScale: true,
                animateRotate: true
            }
        }
    };

    window.onload = function() {
        var ctx = document.getElementById("chart-area").getContext("2d");
        window.myDoughnut = new Chart(ctx, config);
    };

    </script>
@endsection
