@extends('layouts.login')

@section('title', 'Usuarios')

@section('content')

<!-- Main content -->
<section class="content">

  <form action="/login" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
            <label>E-mail</label>
            <input type="text" name="email" class="form-control"/>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
            <label>Senha</label>
            <input type="password" name="password" class="form-control"/>
        </div>
      </div>
    </div>
    <button class="btn btn-success" type="submit">Login</button>
  </form>
  </div>
</div>

</section>
<!-- /.content -->
@endsection
