<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/logform.css">
    <link rel="stylesheet" href="css/navstyle.css">
    
    <script src="https://kit.fontawesome.com/41f828ffd0.js" crossorigin="anonymous"></script>
    <script defer src="js/nav.js"></script>
    <script defer src="js/verificarlogin.js"> </script>
</head>

<body>
    <header class="header">
        <nav class="nav">
            <a href="#" class="Logo nav-link">
                <img src="img/Logo Diana.jpeg" alt="" srcset="">
            </a>
            <button class="nav-toggle">
                <i class="fa-solid fa-bars"></i>
            </button>
            <ul class="nav-menu ">
                <li class="nav-menu-item"><a href="index.html" class="nav-menu-link nav-link nav-menu-link_active">
                        Informacion
                    </a>
                </li>
                <li class="nav-menu-item"><a href="regform.html" class="nav-menu-link nav-link nav-menu-link_active">
                        Registrar
                    </a>
                </li>
                <li class="nav-menu-item"><a href="logform.html" class="nav-menu-link nav-link nav-menu-link_active">
                        Login
                    </a>
                </li>
                <li class="nav-menu-item "><a href="https://www.facebook.com/profile.php?id=283584295097930&paipv=0&eav=Afbek-vaGPA7uCJb-pVzP4JuvK09NZkgwUMPyTWOhKQFV_1A9c9nPWEc1l-fG9sX2o4&_rdr" class="nav-menu-link nav-link nav-menu-link_active" target="_blank">
                        Facebook
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <div class="container-wrap">
        <div class="wrapper">
            <form class="form-container" >
                <h1> Iniciar Sesión</h1>
                <div class="input-box">
                    <input type="text" placeholder="Username" required>
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="password" required>
                    <i class="fa-solid fa-lock"></i>
                </div>
                <div class="recordar-olvidar">
                    <label><input type="checkbox">Recordar </label>
                    <a href="reclogin.html">Olvidaste tu contraseña?</a>
                </div>
                <button type="submit" class="btn"> Login </button>
                <div class="register-link">
                    <p>No tienes una cuenta?<a href="regform.html"> Registrar</a></p>
                </div>
                



            </form>

        </div>
    </div>



</body>

</html>