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
  <link rel="stylesheet" href="{{URL::asset('dist/plugins/datatables/jquery.dataTables.css')}}">
  <link rel="stylesheet" href="{{URL::asset('dist/plugins/datatables/dataTables.bootstrap.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
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

<body class="hold-transition skin-blue sidebar-mini">

  <div class="homepage-hero-module" style="max-height:100vh !important;">
      <div class="video-container">
          <div class="filter"></div>
          <video autoplay loop class="fillWidth">
              <source src="{{URL::asset('dist/img/The_Cucumber.mp4')}}" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
              <source src="{{URL::asset('dist/img/The_Cucumber.webm')}}" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
          </video>
          <div class="poster hidden">
              <img src="{{URL::asset('dist/img/The_Cucumber.jpg')}}" alt="">
          </div>
      </div>
  </div>
<div class="overlay-login"></div>
<div class="box-login" style="position:absolute; margin: 50px auto; width:100%; top:50px;">
      @yield('content')
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="{{URL::asset('dist/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<script src="//code.jquery.com/jquery-1.12.4.js"></script>

<!-- Bootstrap 3.3.6 -->
<script src="{{URL::asset('dist/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('dist/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('dist/plugins/datatables/dataTables.bootstrap.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{URL::asset('dist/js/app.min.js')}}"></script>

<script src="{{URL::asset('dist/js/login.js')}}"></script>

@yield('scripts.footer')
</body>
</html>
