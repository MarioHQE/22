<?php
if (!empty($_GET["id_plato"])) {
    $plato_id = $_GET['id_plato'];
    $consulta = "DELETE FROM plato WHERE id_plato=$plato_id";
    $result = $conexion->query($consulta);
    if ($result) {
        echo "<script> alert('Se elimino el plato') </script>";
        echo "<script> window.location.href='platos.php' </script>";
        $result->close();
    } else {
        echo "<script> alert('error') </script>";
    }
}



    

