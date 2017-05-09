<section class="sidebar">

  <!-- Sidebar user panel (optional) -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="{{URL::asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p>{{ Auth::user()->name }} </p>
      <!-- Status -->
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>

  <!-- search form (Optional) -->
  <form action="#" method="get" class="sidebar-form">
    <div class="input-group">
      <input type="text" name="q" class="form-control" placeholder="Procure...">
          <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
    </div>
  </form>
  <!-- /.search form -->

  <!-- Sidebar Menu -->
  <ul class="sidebar-menu">
    <li class="header">Menu</li>
    <!-- Optionally, you can add icons to the links -->
    <li><a href="/registros"><i class="fa fa-exchange" aria-hidden="true"></i> <span>Registros</span></a></li>
    <li class="treeview">
      <a href="#"><i class="fa fa-list-alt" aria-hidden="true"></i> <span>Cadastros Básicos</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class="active"><a href="/usuarios"><i class="fa fa-users"></i> <span>Usuários</span></a></li>
        <li><a href="/categorias"><i class="fa fa-list-ol" aria-hidden="true"></i> <span>Categorias</span></a></li>
        <li><a href="/contas"><i class="fa fa-clone" aria-hidden="true"></i> <span>Contas</span></a></li>
        <li><a href="/tipos_registro"><i class="fa fa-th-list" aria-hidden="true"></i> <span>Tipos de Registro</span></a></li>
        <li><a href="/tipos_responsavel"><i class="fa fa-th-large" aria-hidden="true"></i> <span>Tipos de Responsavel</span></a></li>
        <li><a href="/status"><i class="fa fa-sliders" aria-hidden="true"></i> <span>Status</span></a></li>
        <li><a href="/responsaveis"><i class="fa fa-id-badge" aria-hidden="true"></i> <span>Responsaveis</span></a></li>
      </ul>
    </li>
  </ul>
  <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
