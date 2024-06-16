<?php

if (!empty($_POST["registro"])) {
    if (empty($_POST["correo"]) or empty($_POST["nombre_usuario"]) or empty($_POST["password"])) {

    } else {
        $correo = $_POST['correo'];
        $nombre_usuario = $_POST['nombre_usuario'];
        $password = $_POST['password'];
        $sql = $conexion->query("INSERT INTO Empleado (correo, nombre_usuario, contrasena) VALUES ('$correo','$nombre_usuario','$password')");

        if ($sql) {
             echo "<script> window.location.href='login_admin.html';</script>";   
            
        }
    }

}

?>