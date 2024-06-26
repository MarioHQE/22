<?php
include("php/conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['usuario']) && isset($_POST['password'])) {
        $nombre1 = $_POST['usuario'];
        $password = $_POST['password'];

        $result = $conexion->query("SELECT * FROM restaurante.empleado");
        if ($result) {
            while ($row = $result->fetch_array()) {
                $id = $row['id_empleado'];
                $nombre = $row['nombre_usuario'];
                $apellido = $row['apellido'];
                $correo = $row['correo'];
                $contrasena = $row['contrasena'];
                if ($nombre == $nombre1 && $contrasena == $password) {
                    echo "<script> window.location.href='menu_login.php';</script>";
                    echo   "<h1> $nombre </h1>";
                    echo   "<h1> $apellido </h1>";
                }
            }
        } else {
            echo "Error en la consulta a la base de datos.";
        }
    } else {
        echo "Por favor, complete todos los campos.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/menu_login.css">
</head>

<body>
    <nav class="navbar bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" id="menu-toggle" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="sidebar" id="sidebar">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">PANEL CONTROL</h5>
        </div>
        <ul class="navbar-nav flex-grow-1 pe-3">
            <li class="nav-item">
                <a class="nav-link" href="platos.php"> <i class="bi bi-hypnotize"></i><span class="link-text"> PLATOS</span></a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="#" onclick="loadPage('platos.php')"> <i class="bi bi-hypnotize"></i><span class="link-text"> PLATOS</span></a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" href="tablausuario.php"><i class="bi bi-person-fill"></i> <span
                        class="link-text">USUARIOS</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="bi bi-images"></i> <span class="link-text">IMAGENES G.</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login_admin.html"> <i class="bi bi-box-arrow-left"></i> SALIR</span></a>
            </li>
        </ul>
    </div>

    <div class="content" id="content">
        
    </div>
</div>

   
    <script src="js/menu_login.js"></script>
    <!---
    <script>
        function loadPage(page) {
            fetch(page)
                .then(response => response.text())
                .then(data => {
                    document.getElementById('content').innerHTML = data;
                })
                .catch(error => console.error('Error al cargar la página:', error));
        }
    </script> -->
</body>

</html>