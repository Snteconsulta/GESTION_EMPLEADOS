<?php
include('../app/config.php');

header('Content-Type: application/json');

$response = [
    'status' => 'error',
    'data' => null
];

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    try {
        $sql = "SELECT * FROM personal WHERE id_usuario = :id";
        $query = $pdo->prepare($sql);
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $empleado = $query->fetch(PDO::FETCH_ASSOC);

        if ($empleado) {
            $response['status'] = 'success';
            $response['data'] = $empleado;
        } else {
            $response['message'] = 'Empleado con ID ' . htmlspecialchars($id) . ' no encontrado.';
        }
    } catch (PDOException $e) {
        $response['message'] = 'Error al consultar la base de datos: ' . $e->getMessage();
    }
} else {
    $response['message'] = 'ID del empleado no proporcionado.';
}

echo json_encode($response);
?>
