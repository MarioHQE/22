<?php
include ("php/conexion.php");

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
                    echo "<h1> $nombre </h1>";
                    echo "<h1> $apellido </h1>";
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
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js?v=1"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js?v=1"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.12.1/plugins/CSSRulePlugin.min.js?v=1"></script>
    <link rel="stylesheet" href="css/login.css">
    <meta http-equiv="Cache-Control" content="no-store" />
</head>

<body>
    <div class="container">
        <div class="loader">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
            <div class="bar4"></div>
            <div class="bar5"></div>
            <div class="bar6"></div>
        </div>

        <main>
            <div class="-content -index">
                <div>
                    <form id="loginForm" method="POST">

                        <div class="cont_img">
                            <img src="img/DIANA_LOGO2.png" class="img_login">
                        </div>
                        <div class="form-group">
                            <label>Usuario</label>
                            <input type="text" name="usuario" class="form-control form-control-sm" placeholder="Usuario"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control form-control-sm"
                                placeholder="Password" required>
                        </div>
                        <div class="cont_boton mt-3">
                            <button type="button" class="btn btn-primary js-trigger-transition" id="btnLogin">Iniciar
                                Sesion</button>

                        </div>
                        <div id="error"></div>
                    </form>

                </div>

            </div>
        </main>
    </div>

    <script src="js/login.js"></script>
</body>

</html>