<?php
if (empty($_POST['actualizar'])) {
    if (empty($_POST['actuNombre']) or empty($_POST['actuimagen']) or empty($_POST['actuprecio'])) {

    } else {
        $Nombre = $_POST['actuNombre'];
        $imagen = $_POST['actuimagen'];
        $precio = $_POST['actuprecio'];
        $Descripcion = $_POST['actuDescripcion'];
        $id_plato = $_POST['id_plato'];
        $consulta = "UPDATE restaurante.plato SET nombre = '$Nombre', precio = '$precio', descripcion = '$Descripcion', imagen = '$imagen' WHERE id_plato = '$id_plato'";
        $resultado = $conexion->query($consulta);
        if ($resultado) {
            echo "<script> alert('Se actualizo el plato') </script>";
            echo "<script>  window.location.href='tablaplato.php';</script>";
        } else {
            echo "<script> alert('error') </script>";
        }

    }
}