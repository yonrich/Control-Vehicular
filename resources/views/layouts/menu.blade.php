<div id="wrapper">
  <div class="overlay"></div>
  <!-- Sidebar -->
  <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
    <ul class="nav sidebar-nav">
      <li class="sidebar-brand"> 
        Usuario
      </li>
      <li> <a href="\home">Dashborad</a>

      </li>
      <!--  Vehiculos  -->
      <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Control Vehicular <span class="caret"></span></a>

        <ul class="dropdown-menu" role="menu">
          <li class="dropdown-header">Vehiculos</li>
          <li><a href="{{ route('control-vehicular.index') }}">Listado de Vehiculos</a>

          </li>
          <li><a href="{{ route('bitacora.index') }}">Bitacora del dia</a>

          </li>
        </ul>
      </li>
      <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Recursos Humanos <span class="caret"></span></a>

        <ul class="dropdown-menu" role="menu">
          <li class="dropdown-header">Empleados</li>
          <li><a href="{{ route('empleados.index') }}">Listado de Empleados</a></li>
          <li><a href="">Catalogos</a></li>
        </ul>
      </li>
      <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administracion <span class="caret"></span></a>

        <ul class="dropdown-menu" role="menu">
          <li class="dropdown-header">Usuarios</li>
          <li><a href="{{ route('usuarios.index') }}">Roles y Permisos</a>

          </li>
        </ul>
      </li>
      
    </ul>
  </nav>
  <!-- /#sidebar-wrapper -->
  <!-- Page Content -->
  <div id="page-content-wrapper">
    <button type="button" class="hamburger is-closed" data-toggle="offcanvas"> <span class="hamb-top"></span>
      <span class="hamb-middle"></span>
      <span class="hamb-bottom"></span>

    </button>
  </div>
  <!-- /#page-content-wrapper -->
</div>
<!-- /#wrapper -->
