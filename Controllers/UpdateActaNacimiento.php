<?php
include('../app/config.php');

header('Content-Type: application/json');

$response = [
    'status' => 'error',
    'message' => 'Error desconocido.',
    'acta_url' => null
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar si el archivo ha sido subido correctamente
    if (isset($_FILES['acta-nacimiento']) && $_FILES['acta-nacimiento']['error'] === UPLOAD_ERR_OK) {

        // Obtener el id_hijo del formulario
        if (isset($_POST['id-hijo']) && !empty($_POST['id-hijo'])) {
            $idHijo = $_POST['id-hijo'];

            // Definir la ruta donde se guardarán los archivos
            $uploadDir = '../uploads/actas/';

            // Verificar si el directorio de carga existe, si no, crear uno
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            // Obtener la información del archivo
            $fileTmpPath = $_FILES['acta-nacimiento']['tmp_name'];
            $fileName = $_FILES['acta-nacimiento']['name'];
            $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);

            // Verificar que el archivo es un PDF
            if (strtolower($fileExtension) !== 'pdf') {
                $response['message'] = 'Solo se permite cargar archivos PDF.';
                echo json_encode($response);
                exit;
            }

            // Generar un nombre único para el archivo
            $newFileName = 'acta_' . $idHijo . '_' . time() . '.' . $fileExtension;
            $destinationPath = $uploadDir . $newFileName;
            
            $ShowDir='/GESTION_EMPLEADOS/uploads/actas/';
            $destinationPathShow=  $ShowDir . $newFileName;

            // Mover el archivo a la carpeta de destino
            if (move_uploaded_file($fileTmpPath, $destinationPath)) {

                // Actualizar la base de datos con la ruta del archivo
                try {
                    $sql = "UPDATE hijos SET Actanacimiento = :acta_url WHERE IdHijo = :id_hijo";
                    $query = $pdo->prepare($sql);
                    $query->bindParam(':acta_url', $destinationPathShow, PDO::PARAM_STR);
                    $query->bindParam(':id_hijo', $idHijo, PDO::PARAM_INT);
                    $query->execute();

                    // Si la base de datos se actualizó correctamente, enviar la respuesta
                    if ($query->rowCount() > 0) {
                        $response['status'] = 'success';
                        $response['acta_url'] = $destinationPathShow;
                        $response['message'] = 'Acta de nacimiento subida correctamente.' . $destinationPathShow ;
                    } else {
                        $response['message'] = 'No se pudo actualizar el registro del hijo'. $destinationPathShow;
                    }

                } catch (PDOException $e) {
                    $response['message'] = 'Error al actualizar la base de datos: ' . $e->getMessage();
                }
            } else {
                $response['message'] = 'Error al mover el archivo a la carpeta de destino.';
            }
        } else {
            $response['message'] = 'ID del hijo no proporcionado.';
        }
    } else {
        $response['message'] = 'No se ha recibido un archivo válido.';
    }
} else {
    $response['message'] = 'Método de solicitud no válido.';
}

echo json_encode($response);
?>
