<?php
if (!empty($_GET["id_empleado"])) {
    $empleado_id = $_GET['id_empleado'];
    $consulta = "DELETE FROM empleado WHERE id_empleado=$empleado_id";
    $result = $conexion->query($consulta);
    if ($result) {
        echo "<script> alert('Se elimino al empleado') </script>";
        echo "<script> window.location.href='tablausuario.php' </script>";
        $result->close();
    } else {
        echo "<script> alert('error') </script>";
    }
}



    

