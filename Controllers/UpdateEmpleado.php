<?php
// Archivo: /GESTION_EMPLEADOS/Controllers/UpdateEmpleado.php

include('../app/config.php');

header('Content-Type: application/json');

$response = [
    'status' => 'error',
    'message' => 'Hubo un problema al procesar la solicitud.'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $numempleado = $_POST['numempleado'];
    $nombre = $_POST['nombre'];
    $apaterno = $_POST['apaterno'];
    $amaterno = $_POST['amaterno'];
    $curp = $_POST['curp'];
    $rfc = $_POST['rfc'];
    $plaza = $_POST['plaza'];
    $puesto = $_POST['puesto'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $estadocivil = $_POST['estadocivil'];
    $hijos = $_POST['hijos'];
    $fechin = $_POST['fechin'];

    try {
        $sql = "UPDATE personal SET 
                    numempleado = :numempleado,
                    nombre = :nombre,
                    apaterno = :apaterno,
                    amaterno = :amaterno,
                    curp = :curp,
                    rfc = :rfc,
                    plaza = :plaza,
                    puesto = :puesto,
                    telefono = :telefono,
                    email = :email,
                    estadocivil = :estadocivil,
                    hijos = :hijos,
                    fechin = :fechin
                WHERE id_usuario = :id";
        $query = $pdo->prepare($sql);
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->bindParam(':numempleado', $numempleado, PDO::PARAM_STR);
        $query->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $query->bindParam(':apaterno', $apaterno, PDO::PARAM_STR);
        $query->bindParam(':amaterno', $amaterno, PDO::PARAM_STR);
        $query->bindParam(':curp', $curp, PDO::PARAM_STR);
        $query->bindParam(':rfc', $rfc, PDO::PARAM_STR);
        $query->bindParam(':plaza', $plaza, PDO::PARAM_STR);
        $query->bindParam(':puesto', $puesto, PDO::PARAM_STR);
        $query->bindParam(':telefono', $telefono, PDO::PARAM_STR);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':estadocivil', $estadocivil, PDO::PARAM_STR);
        $query->bindParam(':hijos', $hijos, PDO::PARAM_INT);
        $query->bindParam(':fechin', $fechin, PDO::PARAM_STR);
        $query->execute();

        if ($query->rowCount() > 0) {
            $response['status'] = 'success';
            $response['message'] = 'Empleado actualizado con éxito.';
        } else {
            $response['message'] = 'No se realizaron cambios.';
        }
    } catch (PDOException $e) {
        $response['message'] = 'Error al actualizar la base de datos: ' . $e->getMessage();
    }
}

echo json_encode($response);
?>
