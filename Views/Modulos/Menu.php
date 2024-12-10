

<?php
session_start();
if (isset($_SESSION['usuario'])) {
    $nombreUsuario = htmlspecialchars($_SESSION['usuario']['nombre']);
} else {
    $nombreUsuario = 'Invitado';
}
?>


<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="Views/Imagenes/Users/administrador_icono.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?= $nombreUsuario; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> En linea</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">

        <!-- <li>
          <a href="empleados">
            <img src="Views/Imagenes/SNTE.jpg" alt="Inicio" style="width: 200px; height: 100px; margin-right: 10px;"> 
          </a>
        </li> -->

        <!-- <li class="header">MENU DE NAVEGACION</li>
        <li class="header">TABLAS</li> -->
        <!-- <li><a href="empleados"><i class="fa fa-circle-o text-white"></i> <span>Empleados</span></a></li> -->
        <!-- <li><a href="padrones"><i class="fa fa-circle-o text-yellow"></i> <span>Padrones</span></a></li>
        <li><a href="vestuario"><i class="fa fa-circle-o text-green"></i> <span>Vestuario</span></a></li>
        <li><a href="trayectoria"><i class="fa fa-circle-o text-blue"></i> <span>Trayectoria</span></a></li> -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
