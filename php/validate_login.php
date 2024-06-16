<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "restaurante");
$conexion->set_charset("utf8");

// Verificar la conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Obtener datos del formulario
$usuario = $_POST['usuario'];
$password = $_POST['password'];

// Consulta para verificar las credenciales
$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND password = '$password'";
$result = mysqli_query($conexion, $sql);

if (mysqli_num_rows($result) > 0) {
    // Credenciales correctas
    echo json_encode(["success" => true]);
} else {
    // Credenciales incorrectas
    echo json_encode(["success" => false, "message" => "Usuario o contraseña incorrectos."]);
}

mysqli_close($conexion);
?>
