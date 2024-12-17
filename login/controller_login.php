<?php
include('../app/config.php');
//include('../layout/mensajes.php');zzzz

session_start();

$response = [
    'status' => 'error',
    'message' => 'Hubo un problema al procesar la solicitud...'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST["email"];
    $password = $_POST["password"];
  
    
    $sql = "SELECT * FROM usuarios WHERE email = :email AND estado = '1'";
    $query = $pdo->prepare($sql);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->execute();
    $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
    $contador = 0;
    $password_tabla = '';
    foreach ($usuarios as $usuario) {
        $password_tabla = $usuario['password'];
        $contador++;
    }
    if (($contador > 0) && password_verify($password, $password_tabla)) {
            
        $_SESSION['usuario'] = [
            'id' => $usuario['id_usuario'],
            'nombre' => $usuario['nombres'],
            'email' => $usuario['email']
        ];

        $response['status'] = 'success';
        $response['message'] = 'Bienvenido al Sistema SNTE-Consulta';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Los datos introducidos son incorrectos, vuelva a intentarlo. Usuario: ' . htmlspecialchars($email) . ', Contraseña: ' . htmlspecialchars($password);
    }

}

// Enviar respuesta en formato JSON
echo json_encode($response);
?>



