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
        $sql = "SELECT * FROM vestuarios WHERE NumeroEmpleado = :NumeroEmpleado";
        $query = $pdo->prepare($sql);
        $query->bindParam(':NumeroEmpleado', $NumeroEmpleado, PDO::PARAM_INT);
        $query->execute();
        $vestuarios = $query->fetchAll(PDO::FETCH_ASSOC);

        if ($vestuarios) {
            $response['status'] = 'success';
            $response['data'] = $vestuarios; 
        } else {
            $response['message'] = 'Empleado con n° ' . htmlspecialchars($NumeroEmpleado) . ' no cuenta con vestuarios.';
        }
    } catch (PDOException $e) {
        $response['message'] = 'Error al consultar la base de datos: ' . $e->getMessage();
    }
} else {
    $response['message'] = 'Numero del empleado no proporcionado.';
}

echo json_encode($response);
?>
