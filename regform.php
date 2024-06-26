<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js?v=1"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js?v=1"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.12.1/plugins/CSSRulePlugin.min.js?v=1"></script>
    <script src="https://kit.fontawesome.com/41f828ffd0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/regform.css">

    <script defer src="js/nav.js"></script>
    <script defer src="js/eyereg.js"></script>
    <script defer src="js/verificarcontraseña.js"></script>

</head>

<body>


    <div class="container">
        <div class="cubierta">

            <form class="form-container" method="post">
                <h1> Registrar Usuario</h1>
                <?php
                include ("php/conexion.php");
                include ("php/register.php");
                ?>
                <div class="caja-input">
                    <input type="text" name="correo" id="vercorreo" placeholder="Correo">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="caja-input">
                    <input type="text" name="nombre_usuario" placeholder="Nombre de Usuario">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="caja-input">
                    <input type="password" name="password" id="password-input2" placeholder="contraseña">
                    <i class="fa-solid fa-eye" id="visualizar2"></i>
                </div>
                <div class="caja-input">
                    <input type="password" name="password2" id="password-input" placeholder="Repetir contraseña">
                    <i class="fa-solid fa-eye" id="visualizar"></i>
                </div>
                <div class="registro-btn">

                    <input name="registro" type="submit" class="btn-register" value="Registrar" onclick="return verificar()">

                </div>



            </form>
        </div>
    </div>

</body>

</html>