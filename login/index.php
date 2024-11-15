<?php
include('../app/config.php');
//include('../layout/mensajes.php');
?>

<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <title><?= APP_NAME; ?></title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= APP_URL; ?>/Views/Recursos/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= APP_URL; ?>/Views/Recursos/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= APP_URL; ?>/Views/Recursos/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= APP_URL; ?>/Views/Recursos/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= APP_URL; ?>/Views/Recursos/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <h3><b><?= APP_TITULO_LOGIN; ?></b></h3>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Inicio de sesión</p>

    <form id="loginForm" action="controller_login.php" method="post">
      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" placeholder="Email" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="input-group mb-3">
        <button class="btn btn-primary btn-block" type="submit">Ingresar</button>
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?= APP_URL; ?>/Views/Recursos/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<!-- <script src="<?= APP_URL; ?>/Views/Recurosos/bower_components/bootstrap/dist/js/bootstrap.min.js"></script> -->
<!-- iCheck -->
<script src="<?= APP_URL; ?>/Views/Recursos/plugins/iCheck/icheck.min.js"></script>
<script>
  $(document).ready(function () {
    $('#loginForm').on('submit', function(event) {
      event.preventDefault(); // Evitar el envío normal del formulario

      $.ajax({
        type: 'POST',
        url: $(this).attr('action'),
        data: $(this).serialize(),
        dataType: 'json',
        success: function(response) {
          alert(response.message);
          if (response.status === 'success') {
            // Redirigir al usuario después del mensaje
            window.location.href = '<?= APP_URL_INICIO; ?>';
          }
        },
        error: function(jqXHR, textStatus, errorThrown) {
          alert('Error en la solicitud: ' + textStatus);
        }
      });
    });
  });
</script>
</body>
</html>
