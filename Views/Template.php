<?php
    include ('app/config.php'); 
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?=APP_NAME;?></title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=APP_URL;?>/Views/Recursos/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=APP_URL;?>/Views/Recursos/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=APP_URL;?>/Views/Recursos/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=APP_URL;?>/Views/Recursos/dist/css/AdminLTE.min.css">
  <!-- DataTables -->
  <!-- <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css"> -->

  <link rel="stylesheet" href="<?=APP_URL;?>/Views/Recursos/dist/css/skins/_all-skins.min.css">
  <!-- <link rel="stylesheet" href="<?=APP_URL;?>/Views/Recursos/dist/css/skins/skin-black.min.css"> -->

  <!-- Sweetalert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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

  <style type="text/css">
  .skin-blue .main-header .navbar {
  background-color: #480404;
  }
  </style> 
     <style type="text/css">
      .skin-blue .main-header .logo {
      background-color: #480404;
      color: #fff;
      border-bottom: 0 solid transparent;
      }
      </style>

       <style type="text/css"> 
        .skin-blue .wrapper, .skin-blue .main-sidebar, .skin-blue .left-side {
        background-color: #757371;
        }
       </style> 

       <style type="text/css">
        .skin-blue .main-header li.user-header {
         background-color: #ed8b34;
        }
      </style>

        <style type="text/css">
          .btn-primary {
           background-color: #ae5050;
            border-color: #e4ecf0;
            }
        </style>

</head>

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
<!-- <script src="<?=APP_URL;?>/Views/Recursos/bower_components/jquery/dist/jquery.min.js"></script> -->
<!-- Bootstrap 3.3.7 -->
<script src="<?=APP_URL;?>/Views/Recursos/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?=APP_URL;?>/Views/Recursos/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=APP_URL;?>/Views/Recursos/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=APP_URL;?>/Views/Recursos/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=APP_URL;?>/Views/Recursos/dist/js/demo.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>
