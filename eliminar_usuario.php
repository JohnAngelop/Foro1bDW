<?php
require 'conexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $sql = "DELETE FROM usuarios WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: protegida.php");
        exit;
    } else {
        echo " Error al eliminar el usuario.";
    }
} else {
    echo " ID de usuario no proporcionado.";
}
?>
