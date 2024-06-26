<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/menu_login.css">
    <script src="js/eliminar.js"> </script>
    <script defer src="js/actuempleado.js"></script>

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
                <a class="nav-link" href="tablausuario.php"><i class="bi bi-person-fill"></i> <span class="link-text">USUARIOS</span></a>
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
        <div class="container mt-5 pt-4">
            <div class="container mt-3">
                <form method="POST">
                    <div class="row align-items-center mb-3">
                        <div class="col-sm-4">
                            <h3>Lista de Usuarios</h3>
                        </div>
                        <div class="col-sm-4 d-flex justify-content-center">
                            <input class="form-control" id="myInput" type="text" placeholder="Filtrar">
                        </div>
                        <div class="col-sm-4 d-flex justify-content-end">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formagre"><i class="bi bi-plus-circle"></i> Nuevo Plato</button>
                        </div>
                    </div>

                </form>
                <table class="table table-bordered text-center">

                    <thead>

                        <tr>
                            <th>N°</th>
                            <th>Nombre Usuario</th>
                            <th>Apellido </th>
                            <th>correo</th>
                            <th>Contraseña</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <?php
                        include("php/conexion.php");
                        include("php/obtenerusuarios.php");
                        include("php/eliminarusuario.php");
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal" id="formagre">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Agregar Empleado</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <?php
                        include("php/conexion.php");
                        include("php/agregarusuario.php");
                        ?>
                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input name="Nombre" type="text" class="form-control" require>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Apellido</label>
                            <input type="text" name="apellido" class="form-control" require>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Contraseña</label>
                            <input name="contrasena" type="password" class="form-control" require>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label" require>Correo</label>
                            <input type="email" name="correo" class="form-control" placeholder="Colocar Correo Electronico">
                        </div>
                        <button name="registro" type="submit" class="btn btn-primary">Agregar</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>

    </div>

    <div class="modal" id="formactu">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Actualizar Empleado</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">


                    <form id="updateForm" method="post">

                        <?php
                        include("php/conexion.php");
                        include("php/Actualizarusuario.php");
                        ?>
                        <input type="hidden" name="id_empleado" id="id_empleado">

                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input id="actuNombre" name="actuNombre" type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Apellido</label>
                            <input id="actuapellido" type="text" name="actuapellido" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Contraseña</label>
                            <input id="actucontrasena" name="actucontrasena" type="password" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Correo</label>
                            <input id="actucorreo" type="email" name="actucorreo" class="form-control" placeholder="Colocar Correo Electronico">
                        </div>
                        <button name="actualizarusuario" type="submit" class="btn btn-primary">Actualizar</button>

                    </form>
                </div>


            </div>
        </div>
    </div>

    <script src="js/menu_login.js"></script>
        <script src="js/actuplato.js"></script>
        <script>
            $(document).ready(function() {
                $("#myInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#myTable tr").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        </script>
</body>

</html>