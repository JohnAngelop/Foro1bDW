<?php
session_start();
require 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombres'];
    $correo = $_POST['correo'];
    $cargo = $_POST['cargo'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO trabajadores (cedula, nombres, correo, cargo, password) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("sssss", $cedula, $nombre, $correo, $cargo, $password);

    if ($stmt->execute()) {
        echo "Registro exitoso. <a href='login.php'>Iniciar sesión</a>";} 
        else {
        echo "Error: " . $stmt->error;
    }
}
?>

<form method="POST">
    Cédula: <input type="text" name="cedula" required><br>
    Nombres: <input type="text" name="nombres" required><br>
    Correo: <input type="email" name="correo" required><br>
    Cargo: <input type="text" name="cargo" required><br>
    Contraseña: <input type="password" name="password" required><br>
    <button type="submit">Registrarse</button>
</form>
