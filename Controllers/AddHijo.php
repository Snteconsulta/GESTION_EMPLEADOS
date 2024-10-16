<?php
include('../app/config.php');

$response = [
    'status' => 'error',
    'message' => '',
    'data' => []
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Recibir datos del hijo
        $NombreHijo = $_POST['nombre'];
        $FechaNacimiento = $_POST['fecha_nacimiento'];
        $NumeroEmpleado = $_POST['numempleado'];

        // Validar los datos
        if (!empty($NombreHijo) && !empty($FechaNacimiento) && !empty($NumeroEmpleado)) {
            // Insertar el hijo en la base de datos
            $sql = "INSERT INTO hijos (NombreHijo, FechaNacimiento, NumeroEmpleado) VALUES (:NombreHijo, :FechaNacimiento, :NumeroEmpleado)";
            $query = $pdo->prepare($sql);
            $query->bindParam(':NombreHijo', $NombreHijo);
            $query->bindParam(':FechaNacimiento', $FechaNacimiento);
            $query->bindParam(':NumeroEmpleado', $NumeroEmpleado);
            $query->execute();

            // Obtener el ID del hijo recién insertado
            $hijo_id = $pdo->lastInsertId();

            // Devolver una respuesta exitosa
            $response['status'] = 'success';
            $response['data'] = [
                'IdHijo' => $hijo_id,
                'NombreHijo' => $NombreHijo,
                'FechaNacimiento' => $FechaNacimiento
            ];
        } else {
            $response['message'] = 'Por favor, complete todos los campos.';
        }
    } catch (PDOException $e) {
        $response['message'] = 'Error al agregar el hijo: ' . $e->getMessage();
    }
} else {
    $response['message'] = 'Método no permitido.';
}

echo json_encode($response);
?>
