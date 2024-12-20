
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Gestion de Empleados xxx</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="Vista/Recursos/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="Vista/Recursos/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="Vista/Recursos/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Vista/Recursos/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="Vista/Recursos/dist/css/skins/_all-skins.min.css">

    <!-- jQuery y Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

<!-- DataTables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  </head>


  <style type="text/css">
  .skin-blue .main-header .navbar {
  background-color: #480404;
  }
  </style>

<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

   <!-- HEADER  -->
  <?php include "Modulos/Header.php"?>

  <!-- MENU -->
  <?php include "Modulos/Menu.php"?>

  <div class="content-wrapper">

    <?php 
        if (isset($_GET["Paginas"])){
          if ($_GET["Paginas"] == "empleados" ||
              $_GET["Paginas"] == "padrones" ||
              $_GET["Paginas"] == "vestuario" ||
              $_GET["Paginas"] == "trayectoria") {
              include "Paginas/" . $_GET["Paginas"] . ".php";
          }
        }
    ?>
  </div>

<!-- FOOTER -->
<?php include "Modulos/Footer.php"?>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<!-- <script src="Vista/Recursos/bower_components/jquery/dist/jquery.min.js"></script> -->
<!-- Bootstrap 3.3.7 -->
<!-- <script src="Vista/Recursos/bower_components/bootstrap/dist/js/bootstrap.min.js"></script> -->
<!-- SlimScroll -->
<!-- <script src="Vista/Recursos/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script> -->
<!-- FastClick -->
<script src="Vista/Recursos/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="Vista/Recursos/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposesxxxx -->
<script src="Vista/Recursos/dist/js/demo.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>
