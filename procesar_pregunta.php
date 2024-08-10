<?php
header('Content-Type: application/json');

$response = array('type' => '', 'message' => '');

try {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
        $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : '';
        $pregunta = isset($_POST['pregunta']) ? $_POST['pregunta'] : '';

        // Validar datos (puedes expandir las validaciones según tus necesidades)
        if (empty($nombre) || empty($apellido) || empty($email) || empty($telefono) || empty($pregunta)) {
            $response['type'] = 'danger';
            $response['message'] = 'Todos los campos son obligatorios.';
            echo json_encode($response);
            exit;
        }

        // Conectar a la base de datos (ajusta los detalles de conexión según tu configuración)
        $conn = new mysqli('localhost', 'root', '', 'db_restaurantefj');

        // Verificar la conexión
        if ($conn->connect_error) {
            $response['type'] = 'danger';
            $response['message'] = 'Error de conexión: ' . $conn->connect_error;
            echo json_encode($response);
            exit;
        }

        // Preparar la consulta SQL para insertar datos
        $stmt = $conn->prepare("INSERT INTO preguntas (nombre, apellido, correo, telefono, pregunta) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param('sssss', $nombre, $apellido, $email, $telefono, $pregunta);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            $response['type'] = 'success';
            $response['message'] = 'Pregunta enviada exitosamente.';
        } else {
            $response['type'] = 'danger';
            $response['message'] = 'Error al enviar la pregunta: ' . $stmt->error;
        }

        // Cerrar la declaración y la conexión
        $stmt->close();
        $conn->close();
    } else {
        $response['type'] = 'danger';
        $response['message'] = 'Método de solicitud no válido.';
    }

    echo json_encode($response);
} catch (Exception $e) {
    $response['type'] = 'danger';
    $response['message'] = 'Error en el servidor: ' . $e->getMessage();
    echo json_encode($response);
}
?>
