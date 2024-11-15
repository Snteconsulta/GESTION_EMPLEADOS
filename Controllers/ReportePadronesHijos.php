<?php
include('../app/config.php');

header('Content-Type: application/json');

$response = [
    'status' => 'error',
    'data' => []
];

try {
    // Consulta modificada para obtener todos los empleados con hijos menores de 12 años
    $sql = "
        SELECT e.numempleado as NumeroEmpleado,
        CONCAT(e.nombre, ' ', e.apaterno, ' ', e.amaterno) AS NombreEmpleado, 
        h.NombreHijo,
        h.FechaNacimiento,
        e.Delegacion
        FROM personal e
        INNER JOIN hijos h ON e.numempleado = h.NumeroEmpleado
        WHERE TIMESTAMPDIFF(YEAR, h.FechaNacimiento, CURDATE()) < 12
    ";
    $query = $pdo->prepare($sql);
    $query->execute();
    $empleadosConHijos = $query->fetchAll(PDO::FETCH_ASSOC);

    if ($empleadosConHijos) {
        $response['status'] = 'success';
        $response['data'] = $empleadosConHijos;
    } else {
        $response['message'] = 'No se encontraron empleados con hijos menores de 12 años.';
    }
} catch (PDOException $e) {
    $response['message'] = 'Error al consultar la base de datos: ' . $e->getMessage();
}

echo json_encode($response);
?>
