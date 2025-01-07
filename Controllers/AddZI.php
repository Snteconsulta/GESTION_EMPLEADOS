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
        $Adscripcion = $_POST['Adscripcion'];
        $Actividad = $_POST['Actividad'];
        $Motivo = $_POST['Motivo'];
        $NumeroEmpleado = $_POST['numempleado'];

        if (!empty($Adscripcion) && !empty($Actividad) && !empty($Motivo) && !empty($NumeroEmpleado)) {

            $sql = "INSERT INTO zi (NumeroEmpleado, Adscripcion, Actividad, Motivo) VALUES (:NumeroEmpleado,:Adscripcion,:Actividad,:Motivo)";
            $query = $pdo->prepare($sql);
            $query->bindParam(':Adscripcion', $Adscripcion);
            $query->bindParam(':Actividad', $Actividad);
            $query->bindParam(':Motivo', $Motivo);
            $query->bindParam(':NumeroEmpleado', $NumeroEmpleado);
            $query->execute();

            $zi_id = $pdo->lastInsertId();

            $response['status'] = 'success';
            $response['data'] = [
                'zi_id' => $zi_id,
                'Adscripcion' => $Adscripcion,
                'Actividad' => $Actividad,
                'Motivo' => $Motivo
            ];
        } else {
            $response['message'] = 'Por favor, complete todos los campos.';
        }
    } catch (PDOException $e) {
        $response['message'] = 'Error al agregar el zi: ' . $e->getMessage();
    }
} else {
    $response['message'] = 'Método no permitido.';
}

echo json_encode($response);
?>
