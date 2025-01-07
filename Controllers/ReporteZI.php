<?php
include('../app/config.php');

header('Content-Type: application/json');

$response = [
    'status' => 'error',
    'data' => []
];

try {

    $sql = "
        SELECT e.numempleado AS NumeroEmpleado,
        CONCAT(e.nombre, ' ', e.apaterno, ' ', e.amaterno) AS NombreEmpleado,
        e.rfc,
        z.Adscripcion,
        z.Actividad,
        z.Motivo
        FROM personal e
        INNER JOIN ZI z ON e.numempleado = z.NumeroEmpleado
        ORDER BY e.numempleado
    ";
    
    $query = $pdo->prepare($sql);
    $query->execute();
    $empleadosConZI= $query->fetchAll(PDO::FETCH_ASSOC);

    if ($empleadosConZI) {
        $response['status'] = 'success';
        $response['data'] = $empleadosConZI;
    } else {
        $response['message'] = 'No se encontraron empleados con Zona Insalubre.';
    }
} catch (PDOException $e) {
    $response['message'] = 'Error al consultar la base de datos: ' . $e->getMessage();
}

echo json_encode($response);
?>
