<?php
include('../app/config.php');

header('Content-Type: application/json');

$response = [
    'status' => 'error',
    'message' => 'No se pudo agregar el empleado.',
];

try {
    // Recibir datos del formulario
    $numempleado = $_POST['numempleado'] ?? null;
    $nombre = $_POST['nombre'] ?? null;
    $apaterno = $_POST['apaterno'] ?? null;
    $amaterno = $_POST['amaterno'] ?? null;
    $curp = $_POST['curp'] ?? null;
    $rfc = $_POST['rfc'] ?? null;
    $plaza = $_POST['plaza'] ?? null;
    $puesto = $_POST['puesto'] ?? null;
    $telefono = $_POST['telefono'] ?? null;
    $email = $_POST['email'] ?? null;
    $estadocivil = $_POST['estadocivil'] ?? null;
    $hijos = $_POST['hijos'] ?? null;
    $fechin = $_POST['fechin'] ?? null;

    // Validar que todos los campos requeridos estén presentes
    if ($numempleado && $nombre && $apaterno && $amaterno && $curp && $rfc && $plaza && $puesto && $telefono && $email && $estadocivil && $hijos !== null && $fechin) {
        
        // Preparar la consulta SQL para insertar el nuevo empleado
        $sql = "INSERT INTO personal (numempleado, nombre, apaterno, amaterno, curp, rfc, plaza, puesto, telefono, email, estadocivil, hijos, fechin) 
                VALUES (:numempleado, :nombre, :apaterno, :amaterno, :curp, :rfc, :plaza, :puesto, :telefono, :email, :estadocivil, :hijos, :fechin)";
        $query = $pdo->prepare($sql);

        // Ejecutar la consulta
        $query->execute([
            ':numempleado' => $numempleado,
            ':nombre' => $nombre,
            ':apaterno' => $apaterno,
            ':amaterno' => $amaterno,
            ':curp' => $curp,
            ':rfc' => $rfc,
            ':plaza' => $plaza,
            ':puesto' => $puesto,
            ':telefono' => $telefono,
            ':email' => $email,
            ':estadocivil' => $estadocivil,
            ':hijos' => $hijos,
            ':fechin' => $fechin,
        ]);

        // Verificar si el empleado fue insertado correctamente
        if ($query->rowCount() > 0) {
            $response['status'] = 'success';
            $response['message'] = 'Empleado agregado exitosamente.';
        } else {
            $response['message'] = 'No se pudo agregar el empleado.';
        }
    } else {
        $response['message'] = 'Por favor complete todos los campos requeridos.';
    }
    
} catch (PDOException $e) {
    $response['message'] = 'Error al agregar el empleado: ' . $e->getMessage();
}

// Devolver respuesta en formato JSON
echo json_encode($response);
?>
