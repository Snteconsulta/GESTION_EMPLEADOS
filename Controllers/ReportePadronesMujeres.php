<?php
include('../app/config.php');

header('Content-Type: application/json');

$response = [
    'status' => 'error',
    'data' => []
];

try {
    // Convertimos `sexo` a minúsculas para hacer una comparación insensible a mayúsculas/minúsculas
    $sql = "SELECT  numempleado,
                    Delegacion, 
                    CONCAT(nombre, ' ', apaterno, ' ', amaterno) AS NombreEmpleado 
                    FROM personal WHERE hijos = 1 AND LOWER(Sexo) = 'Femenino'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $empleados = $query->fetchAll(PDO::FETCH_ASSOC);
    
    if ($empleados) {
        $response['status'] = 'success';
        $response['data'] = $empleados;
    } else {
        $response['message'] = 'No se encontraron empleados con hijos de sexo Femenino.';
    }
} catch (PDOException $e) {
    $response['message'] = 'Error al consultar la base de datos: ' . $e->getMessage();
}

echo json_encode($response);
?>
