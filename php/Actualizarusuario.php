<?php
if (empty($_POST['actualizarusuario'])) {
    if (empty($_POST['actuNombre']) or empty($_POST['actuapellido']) or empty($_POST['actucorreo']) or empty($_POST['actucontrasena'])) {



    } else {
        $nombre = $_POST['actuNombre'];
        $apellido = $_POST['actuapellido'];
        $correo = $_POST['actucorreo'];
        $contrasena = $_POST['actucontrasena'];
        $id_empleado = $_POST['id_empleado'];
        $consulta = "UPDATE `restaurante`.`empleado` SET `correo` = '$correo', `nombre_usuario` = '$nombre', `contrasena` = '$contrasena', `apellido` = '$apellido' WHERE `id_empleado` = '$id_empleado'";
        $resultado =$conexion->query($consulta);
        if ($resultado) {
            echo "<script> alert('Se actualizó el Usuario') </script>";
            echo "<script>  window.location.href='tablausuario.php';</script>";
        } else {
            echo "<script> alert('Error al actualizar el usuario') </script>";
        }
    }
}
