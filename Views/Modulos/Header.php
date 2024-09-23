
<header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>G</b>E</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Gestion</b>Empleados</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="Views/Imagenes/Users/administrador_icono.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Cesar Garcia</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="Views/Imagenes/Users/administrador_icono.jpg" class="img-circle" alt="User Image">

                <p>
                  Cesar Garcia - Administrador 
                  <small>Desde Ago. 2024</small>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-primary">Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-danger" id="logout-btn">Cerrar Sesion</a>
                </div>
              </li>
            </ul>
          </li>

        </ul>
      </div>
    </nav>
  </header>

  <script>
  document.getElementById('logout-btn').addEventListener('click', function(e) {
    e.preventDefault();
    var APP_URL_LOGIN ="http://localhost/GESTION_EMPLEADOS/LOGIN";
    window.location.href = '<?= APP_URL_LOGIN; ?>';
  });
</script>