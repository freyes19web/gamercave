<?php
// Incluir archivo de conexión a la base de datos
include 'db_connection.php';

// Función para limpiar y validar datos
function cleanInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Inicializar variables para enviar como respuesta AJAX
$response = array();

// Validar y limpiar datos del formulario
$nombre = cleanInput($_POST['nombre']);
$email = cleanInput($_POST['email']);
$password = cleanInput($_POST['password']);
$direccion = cleanInput($_POST['direccion']);
$telefono = cleanInput($_POST['telefono']);

// Validar Nombre: no vacío y sin números
if (empty($nombre)) {
    $response['type'] = 'danger';
    $response['field'] = 'nombre';
    $response['message'] = 'El nombre es requerido.';
} elseif (preg_match('/\d/', $nombre)) {
    $response['type'] = 'danger';
    $response['field'] = 'nombre';
    $response['message'] = 'El nombre no puede contener números.';
} else {
    // Validar Correo Electrónico: sintaxis correcta y no duplicado en la base de datos
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['type'] = 'danger';
        $response['field'] = 'email';
        $response['message'] = 'El correo electrónico no es válido.';
    } else {
        // Verificar si el correo ya existe en la base de datos
        $sql = "SELECT * FROM registro WHERE email = '$email'";
        $result = $conexion->query($sql);

        if ($result->num_rows > 0) {
            $response['type'] = 'danger';
            $response['field'] = 'email';
            $response['message'] = 'Este correo electrónico ya está registrado. Utiliza otro.';
        } else {
            // Validar Contraseña: mayor a 6 caracteres
            if (strlen($password) < 6) {
                $response['type'] = 'danger';
                $response['field'] = 'password';
                $response['message'] = 'La contraseña debe tener al menos 6 caracteres.';
            } else {
                // Validar Dirección: no vacía
                if (empty($direccion)) {
                    $response['type'] = 'danger';
                    $response['field'] = 'direccion';
                    $response['message'] = 'La dirección es requerida.';
                } else {
                    // Validar Teléfono: solo números
                    if (!ctype_digit($telefono)) {
                        $response['type'] = 'danger';
                        $response['field'] = 'telefono';
                        $response['message'] = 'El teléfono solo puede contener números.';
                    } else {
                        // Insertar usuario en la base de datos si pasa todas las validaciones
                        $insertSql = "INSERT INTO registro (nombre, email, password, direccion, telefono) VALUES ('$nombre', '$email', '$password', '$direccion', '$telefono')";

                        if ($conexion->query($insertSql) === TRUE) {
                            $response['type'] = 'success';
                            $response['message'] = '¡Registro exitoso! Ahora puedes iniciar sesión.';
                        } else {
                            $response['type'] = 'danger';
                            $response['message'] = 'Error al registrar el usuario: ' . $conexion->error;
                        }
                    }
                }
            }
        }
    }
}

// Cerrar conexión
$conexion->close();

// Enviar respuesta como JSON para manejarla en JavaScript
header('Content-Type: application/json');
echo json_encode($response);
?>
