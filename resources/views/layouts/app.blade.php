<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Controle Pessoal</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{URL::asset('dist/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('dist/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('dist/css/sweetalert2.min.css')}}">

  <link rel="stylesheet" href="{{URL::asset('dist/plugins/datatables/jquery.dataTables.css')}}">
  <link rel="stylesheet" href="{{URL::asset('dist/plugins/datatables/dataTables.bootstrap.css')}}">
  <link rel="stylesheet" href="{{URL::asset('dist/plugins/datedropper/datedropper.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{URL::asset('dist/css/AdminLTE.min.css')}}">

  <link rel="stylesheet" href="{{URL::asset('dist/css/skins/skin-green.css')}}">
  <link rel="stylesheet" href="{{URL::asset('dist/css/custom.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">
      @include('shared.header')
  </header>
  <aside class="main-sidebar">
      @include('shared.main_sidebar')
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
      @include('shared.footer')
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
      @include('shared.control_sidebar')
  </aside>

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="{{URL::asset('dist/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<script src="//code.jquery.com/jquery-1.12.4.js"></script>

<!-- Bootstrap 3.3.6 -->
<script src="{{URL::asset('dist/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('dist/js/jscolor.min.js')}}"></script>
<script src="{{URL::asset('dist/js/jquery.maskMoney.min.js')}}"></script>
<script src="{{URL::asset('dist/js/select2.min.js')}}"></script>
<script src="{{URL::asset('dist/js/sweetalert2.min.js')}}"></script>
<script src="{{URL::asset('dist/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('dist/plugins/datatables/dataTables.bootstrap.js')}}"></script>
<script src="{{URL::asset('dist/plugins/datedropper/datedropper.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{URL::asset('dist/js/app.min.js')}}"></script>

<script>
$(document).ready(function() {
  $('.datedropper').dateDropper();
  $('.moeda').maskMoney();
  $('.select2').select2();
});
</script>
@if ($errors->any())
    {!!
        implode('', $errors->all("
            <script type='text/javascript'>
                $(function () {
                  swal({
                    title: 'Erro!',
                    text: ':message',
                    type: 'error',
                    confirmButtonText: 'Ok'
                  })
                });
            </script>")
        )
    !!}
@endif

@yield('scripts.footer')
</body>
</html>
