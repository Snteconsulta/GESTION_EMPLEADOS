<?php
include('../app/config.php');

header('Content-Type: application/json');

$response = [
    'status' => 'error',
    'data' => []
];

try {
    // Consulta para obtener empleados junto con su vestuario asignado
    $sql = "
        SELECT e.numempleado AS NumeroEmpleado,
        CONCAT(e.nombre, ' ', e.apaterno, ' ', e.amaterno) AS NombreEmpleado,
        v.Vestuario as NombreVestuario,
        v.Orden
        FROM personal e
        LEFT JOIN vestuarios v ON e.numempleado = v.NumeroEmpleado
        ORDER BY e.numempleado
    ";
    $query = $pdo->prepare($sql);
    $query->execute();
    $empleadosConVestuario = $query->fetchAll(PDO::FETCH_ASSOC);

    if ($empleadosConVestuario) {
        $response['status'] = 'success';
        $response['data'] = $empleadosConVestuario;
    } else {
        $response['message'] = 'No se encontraron empleados con vestuario asignado.';
    }
} catch (PDOException $e) {
    $response['message'] = 'Error al consultar la base de datos: ' . $e->getMessage();
}

echo json_encode($response);
?>
