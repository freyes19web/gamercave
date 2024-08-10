<?php
session_start();

header('Content-Type: application/json');

try {
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = [];
    }

    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $plato = $_POST['plato'];
    $cantidad = $_POST['cantidad'];
    $comentarios = $_POST['comentarios'];

    $item = [
        'nombre' => $nombre,
        'direccion' => $direccion,
        'telefono' => $telefono,
        'email' => $email,
        'plato' => $plato,
        'cantidad' => $cantidad,
        'comentarios' => $comentarios
    ];

    $_SESSION['carrito'][] = $item;

    echo json_encode([
        'success' => true,
        'item' => $item
    ]);
} catch (Exception $e) {
    echo json_encode([
        'success' => false,
        'message' => 'Error al procesar el carrito: ' . $e->getMessage()
    ]);
}
?>
