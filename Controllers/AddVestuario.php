<?php
// Incluir la conexión a la base de datos
include('../app/config.php');

header('Content-Type: application/json');

$response = [
    'status' => 'error',
    'message' => '',
    'data' => []
];

// Verificar si se recibió la solicitud POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Obtener los datos del formulario
        $vestuario = isset($_POST['vestuario']) ? trim($_POST['vestuario']) : '';
        $orden = isset($_POST['orden']) ? trim($_POST['orden']) : '';
        $numempleado = isset($_POST['numempleado']) ? trim($_POST['numempleado']) : '';

        // Validar los datos
        if (!empty($vestuario) && !empty($orden) && !empty($numempleado)) {
            // Insertar el vestuario en la base de datos
            $sql = "INSERT INTO vestuarios (Vestuario, Orden, NumeroEmpleado) VALUES (:Vestuario, :Orden, :NumeroEmpleado)";
            $query = $pdo->prepare($sql);
            $query->bindParam(':Vestuario', $vestuario);
            $query->bindParam(':Orden', $orden);
            $query->bindParam(':NumeroEmpleado', $numempleado);
            $query->execute();

            // Obtener el ID del vestuario recién insertado
            $vestuario_id = $pdo->lastInsertId();

            // Devolver una respuesta exitosa
            $response['status'] = 'success';
            $response['data'] = [
                'IDVestuario' => $vestuario_id,
                'Vestuario' => $vestuario,
                'Orden' => $orden
            ];
        } else {
            $response['message'] = 'Todos los campos son obligatorios.';
        }
    } catch (PDOException $e) {
        $response['message'] = 'Error al agregar el vestuario: ' . $e->getMessage();
    }
} else {
    $response['message'] = 'Método no permitido.';
}

// Devolver la respuesta en formato JSON
echo json_encode($response);
?>
