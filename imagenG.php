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
            <div class="row align-items-center mb-3">
                <div class="col-sm-4">
                    <h3>Lista de Platos</h3>
                </div>
                <div class="col-sm-4 d-flex justify-content-center">
                    <input class="form-control" id="myInput" type="text" placeholder="Filtrar">
                </div>
                <div class="col-sm-4 d-flex justify-content-end">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formagre"><i class="bi bi-plus-circle"></i> Nuevo Plato</button>
                </div>
            </div>



            <div class="table-responsive text-center">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nombre</th>
                            <th>Imagen</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <tr>
                            <td>1</td>
                            <td>Foto</td>
                            <td>Imagen1.jpg</td>
                            <td>
                            <button class="btn btn-danger" type="submit"><i class='bi bi-trash'></i> Eliminar</button>
                            <button class="btn btn-warning" type="submit" data-bs-toggle="modal" data-bs-target="#formactu"><i class='bi bi-pencil'></i> Editar</button>
                        </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>




        <div class="modal" id="formagre">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title">Agregar Imagen</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post">
                            <?php
                            include("php/conexion.php");
                            include("php/agregarplato.php");
                            ?>
                            <div class="mb-3">
                                <label class="form-label">Nombre</label>
                                <input name="Nombre" type="text" class="form-control" require>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Imagen</label>
                                <input type="file" name="imagen" class="form-control" require>
                            </div>
                            <button name="registro" type="submit" class="btn btn-primary">Agregar</button>
                        </form>
                    </div>


                </div>
            </div>

        </div>
        <div class="modal" id="formactu">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title">Actualizar Imagen</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form id="updateForm" method="post">

                            <?php
                            include("php/conexion.php");
                            include("php/Actualizarplato.php");
                            ?>

                            <input type="hidden" name="id_plato" id="id_plato">
                            <!-- Existing form fields -->
                            <div class="mb-3">
                                <label class="form-label">Nombre</label>
                                <input id="actuNombre" name="actuNombre" type="text" class="form-control" value="Foto">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Imagen</label>
                                <input type="file" id="actuimagen" name="actuimagen" class="form-control">
                            </div>
                            
                            <button name="actualizar" type="submit" class="btn btn-primary">Actualizar</button>

                        </form>
                    </div>

                </div>
            </div>
        </div>




        <script src="js/menu_login.js"></script>
        <script src="js/actuplato.js"></script>
        <script>
            /*para filtrar */
            $(document).ready(function() {
                $("#myInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#myTable tr").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });

            /*pasar los datos al modal */


            document.querySelectorAll(".btn-edit").forEach((btn) => {
                btn.addEventListener("click", (e) => {
                    e.preventDefault();
                    var id = btn.getAttribute("data-id");
                    let id_oculto = document.getElementById("id_plato");
                    let nombre = document.getElementById("actuNombre");
                    var name = btn.getAttribute("data-nombre");
                    let precio = document.getElementById("actuprecio");
                    var price = btn.getAttribute("data-precio");
                    let descripcion = document.getElementById("actuDescripcion");
                    var description = btn.getAttribute("data-descripcion");



                    precio.value = price;
                    descripcion.value = description;
                    nombre.value = name;


                    id_oculto.value = id;


                    // Obtener otros valores del botón y asignarlos a los campos del formulario

                    // Para el campo de la imagen, podrías necesitar manejarlo de manera diferente dependiendo de tus necesidades
                    console.log(id);
                });
            })
        </script>
</body>


</html>