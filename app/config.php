<?php
 
define("SERVIDOR", "localhost");
define("USUARIO", "root");
define("PASSWORD", "");
define("BD", "gestionempleados");

define("APP_NAME","GESTION DE EMPLEADOS");
define("APP_TITULO_LOGIN","SNTE CONSULTA");
define("APP_URL","http://localhost/GESTION_EMPLEADOS");
define("APP_URL_INICIO","http://localhost/GESTION_EMPLEADOS/empleados");
define("APP_URL_LOGIN","http://localhost/GESTION_EMPLEADOS/LOGIN");
define("URL_CONTROLER","../GESTION_EMPLEADOS/Controllers");

//define("APP_URL");

$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

try {
    $pdo = new PDO($servidor, USUARIO, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
        //echo "conexión exitosa a la base de datos";
}catch (PDOException $e) {
    echo "error no se pudo conectar a la base de datos";
}

date_default_timezone_set("America/Mexico_City");
$fechahora = date("Y-m-d H:i:s");
$fecha_actual = date("Y-m-d");
$dia_actual = date("d");
$mes_actual = date("m");
$year_actual = date("Y");
?>