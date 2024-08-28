<?php
include ('../app/config.php');
include ('../layout/mensajes.php');


    $email = $_POST["email"];
    $password = $_POST["password"];


$sql = "SELECT * FROM usuarios WHERE email = '$email' AND estado = '1' ";
$query = $pdo->prepare($sql);
$query->execute();

$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

$contador = 0;

foreach ($usuarios as $usuario) {
     $password_tabla = $usuario['password'];
     $contador = $contador + 1;

}

if ( ($contador>0) && (password_verify($password,$password_tabla)) ){
    session_start();
    $_SESSION['mensaje'] = "Bienvenido al Sistema SNTE-Consulta";
    $_SESSION['icono'] = "success"; 
   header ("Location:".APP_URL."/");
}else{
    session_start();
    $_SESSION['mensaje'] = "Los datos introducidos son incorrectos, vuelva a intentarlo";
    $_SESSION['icono'] = "error"; 
    header ("Location:".APP_URL."/login"); 
}
?>

 



