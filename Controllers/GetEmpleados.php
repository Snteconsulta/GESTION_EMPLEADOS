<?php
include('../app/config.php');

header('Content-Type: application/json');

$response = [
    'status' => 'error',
    'data' => []
];

try {
    $sql = "SELECT * FROM personal";
    $query = $pdo->prepare($sql);
    $query->execute();
    $empleados = $query->fetchAll(PDO::FETCH_ASSOC);
    
    if ($empleados) {
        $response['status'] = 'success';
        $response['data'] = $empleados;
    } else {
        $response['message'] = 'No se encontraron empleados.';
    }
} catch (PDOException $e) {
    $response['message'] = 'Error al consultar la base de datos: ' . $e->getMessage();
}

echo json_encode($response);
?>
