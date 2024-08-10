<?php
session_start();

header('Content-Type: application/json');

// Incluir el archivo de conexión a la base de datos
include 'db_connection.php';

try {
    if (!isset($_SESSION['carrito']) || empty($_SESSION['carrito'])) {
        throw new Exception('El carrito está vacío.');
    }

    $carrito = $_SESSION['carrito'];

    // Para depuración, imprime el contenido del carrito
    error_log("Contenido del carrito: " . json_encode($carrito));

    // Preparar la consulta SQL para insertar el pedido en la base de datos
    $stmt = $conexion->prepare("INSERT INTO pedidos (nombre, direccion, telefono, email, plato, cantidad, comentarios) VALUES (?, ?, ?, ?, ?, ?, ?)");

    foreach ($carrito as $item) {
        $stmt->bind_param("sssssis", $item['nombre'], $item['direccion'], $item['telefono'], $item['email'], $item['plato'], $item['cantidad'], $item['comentarios']);

        // Para depuración, verifica los datos que se están intentando insertar
        error_log("Datos a insertar: " . json_encode($item));

        if (!$stmt->execute()) {
            throw new Exception('Error al guardar el pedido: ' . $stmt->error);
        }
    }

    // Limpiar el carrito después de procesar el pedido
    unset($_SESSION['carrito']);

    echo json_encode([
        'success' => true,
        'message' => 'Pedido procesado correctamente'
    ]);
} catch (Exception $e) {
    echo json_encode([
        'success' => false,
        'message' => 'Error al procesar el pedido: ' . $e->getMessage()
    ]);
}

$conexion->close();
?>
