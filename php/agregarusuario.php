<?php
if (empty($_POST['registro'])) {
    if (empty($_POST['Nombre']) or empty($_POST['apellido']) or empty($_POST['correo']) or empty($_POST['contrasena'])) {

    } else {
        $Nombre = $_POST['Nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $contrasena=$_POST['contrasena'];
        $consulta = "INSERT INTO empleado(nombre_usuario, contrasena, apellido, correo) VALUES ('$Nombre','$contrasena','$apellido','$correo')";
        $resultado = $conexion->query($consulta);
        if ($resultado) {
            echo "<script> alert('Se regsitro el empleado') </script>";
            echo "<script>  window.location.href='tablausuario.php';</script>";
        } else {
            echo "<script> alert('error') </script>";
        }

    }
}






