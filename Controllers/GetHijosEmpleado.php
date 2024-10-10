<?php
include('../app/config.php');

header('Content-Type: application/json');

$response = [
    'status' => 'error',
    'data' => null
];

if (isset($_GET['NumeroEmpleado'])) {

    $NumeroEmpleado = $_GET['NumeroEmpleado'];

    try {
        $sql = "SELECT * FROM hijos WHERE NumeroEmpleado = :NumeroEmpleado";
        $query = $pdo->prepare($sql);
        $query->bindParam(':NumeroEmpleado', $NumeroEmpleado, PDO::PARAM_INT);
        $query->execute();
        $hijos = $query->fetchAll(PDO::FETCH_ASSOC);

        if ($hijos) {
            $response['status'] = 'success';
            $response['data'] = $hijos;
        } else {
            $response['message'] = 'Empleado con n° ' . htmlspecialchars($NumeroEmpleado) . ' no cuenta con hijos.';
        }
    } catch (PDOException $e) {
        $response['message'] = 'Error al consultar la base de datos: ' . $e->getMessage();
    }
} else {
    $response['message'] = 'Numero del empleado no proporcionado.';
}

echo json_encode($response);
?>
