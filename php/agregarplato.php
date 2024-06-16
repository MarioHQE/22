<?php
if (empty($_POST['registro'])) {
    if (empty($_POST['Nombre']) or empty($_POST['imagen']) or empty($_POST['precio'])) {

    } else {
        $Nombre = $_POST['Nombre'];
        $imagen = $_POST['imagen'];
        $precio = $_POST['precio'];
        $Descripcion = $_POST['Descripcion'];
        $consulta = "INSERT INTO plato(nombre, imagen, precio, descripcion) VALUES ('$Nombre','$imagen','$precio','$Descripcion')";
        $resultado = $conexion->query($consulta);
        if ($resultado) {
            echo "<script> alert('Se regsitro el plato') </script>";
            echo "<script> window.location.href='platos.php' </script>";
        } else {
            echo "<script> alert('error') </script>";
        }

    }
}






