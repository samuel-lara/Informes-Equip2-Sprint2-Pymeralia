<?php 
include "../modals/modal_crear_resposta.php"
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Respuestas</title>
    <script src="../scripts/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/barraBusqueda.css">
    <link href="../css/fontawesome.min.css" rel="stylesheet">
    <link href="../css/brands.min.css" rel="stylesheet">
    <link href="../css/solid.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
</head>

<body class="d-flex flex-column min-vh-100">
    <header class="sticky-top">
        <div class="navbar navbar-expand-sm p-0" id="header-logo">
            <div class="container-fluid d-flex flex-row justify-content-between navbar-nav ">
                <div class="p-2" id="logo">
                    <li class="nav-item"><a class="nav-link" href="#"><img src="../images/logo_pymeshield.png"
                                alt="Logo" class="d-inline-block align-text-middle">
                            pymeshield</a></li>
                </div>

                <!--Ruptura del responsive en 576px a 575px-->
                <div class="p-2">
                    <div class="container" id="navbarScroll">
                        <ul class="navbar-nav me-auto my-2" style="--bs-scroll-height: 100px;">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="menu-dropdown" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-user"></i>
                                </a>
                                <ul class="dropdown-menu" id="menu-user">
                                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-address-card"></i>Editar
                                            Perfil</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-language"></i>Idioma</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-palette"></i>Tema</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i
                                                class="fa-solid fa-right-from-bracket"></i>Cerrar Sesi??n</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="../cliente/Vista-Questionari.php"><i class="fa-solid fa-shield-halved"></i>Modo Usuario</a></li>
                                </ul>
                            </li>
                    </div>
                </div>
            </div>
        </div><!--Header Logo-->


        <nav class="navbar navbar-expand-lg p-0" id="main-navbar">
            <div class="container-fluid">
                <span class="p-2">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button></span>
                <div class="collapse navbar-collapse p-0" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#"><i
                                    class="fa-solid fa-house"></i>Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="Llistat-Questionaris.php"><i
                                    class="fa-solid fa-clipboard"></i>Cuestionarios</a></li>
                        <li class="nav-item"><a class="nav-link" href="Llistat-Informes.php"><i
                                    class="fa-solid fa-book"></i>Informes</a></li>
                        <li class="nav-item"><a class="nav-link" href="Llistat-Preguntes.php"><i
                                    class="fa-solid fa-question"></i>Listado Preguntas</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="Llistat-Respostes.php"><i
                                    class="fa-solid fa-check-circle"></i>Listado Respuestas</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#"><i
                                    class="fa-solid fa-graduation-cap"></i>Formaci??n</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#"><i
                            class="fa-solid fa-address-book"></i>Contacto</a>
                        </li>
                    </ul>
                </div>
        </nav><!--Header Menu-->

    </header>
    <div class="container overflow-hidden text-center py-3">
    <div class="input-group" id="barra-busqueda">
        <div>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalresposta" id="boton-crear-questionario">Crear Resposta</button>
        </div>

        <div class="form-outline">
          <input type="search" id="form1" class="form-control" placeholder="Buscar"/>
        </div>
        <button type="button" class="btn btn-primary">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div><!--Barra Buscar-->

    <div class="container overflow-hidden text-center py-3" id="cuerpo">
        <div class="container overflow-hidden text-center py-3">
            <h2>Lista Respuestas</h2>
        </div>
        <div>
            <table class="table table-striped align-middle container overflow-hidden text-center py-3">
                <thead>
                    <tr>
                        <th scope="col"><input type="checkbox"></th>
                        <th scope="col">Nombre Respuestas</th>
                        <th scope="col">Representante</th>
                        <th scope="col">Empresa</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Fecha</th>
                        <th scope="col"><button class="btn btn-danger btn-sm">Eliminar toda la selecci??n</button><!--Editar i Eliminar--></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><input type="checkbox"></th>
                        <td>Respuesta 1</td><!--Nombre Questionario-->
                        <td>Toni Morant</td><!--Representante-->
                        <td>Institut Montsi??</td><!--Empresa-->
                        <td>Samuel Lara</td><!--Autor-->
                        <td>22/11/2022</td><!--Fecha-->
                        <td><button class="btn btn-warning btn-sm">Editar</button>  <button class="btn btn-danger btn-sm">Eliminar</button></td><!--Editar i Eliminar-->
                    </tr>
                    <tr>
                        <th scope="row"><input type="checkbox"></th>
                        <td>Respuesta 2</td><!--Nombre Questionario-->
                        <td>Xavi Fibla</td><!--Representante-->
                        <td>Fibla S.L.</td><!--Empresa-->
                        <td>Ivan Sorribes</td><!--Autor-->
                        <td>14/10/2022</td><!--Fecha-->
                        <td><button class="btn btn-warning btn-sm">Editar</button>  <button class="btn btn-danger btn-sm">Eliminar</button></td><!--Editar i Eliminar-->
                    </tr>
                    <tr>
                        <th scope="row"><input type="checkbox"></th>
                        <td>Respuesta 3</td><!--Nombre Questionario-->
                        <td>Joan Iglesias</td><!--Representante-->
                        <td>Empatica</td><!--Empresa-->
                        <td>Yasir Hayati</td><!--Autor-->
                        <td>09/09/2022</td><!--Fecha-->
                        <td><button class="btn btn-warning btn-sm">Editar</button>  <button class="btn btn-danger btn-sm">Eliminar</button></td><!--Editar i Eliminar-->
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <footer class="bg-black text-center text-lg-center mt-auto">
        <div class="text-center p-3">
            <div class="fluid-container">
                <div class="row">
                    <div id="logo-footer" class="col-6 col-md-3">
                        <a class="text-light" href="index.html"><img src="../images/logo_pymeshield_black.png"
                                alt="Logo" width="50px" style="margin-right: 5px;"
                                class="d-inline-block align-text-middle"><i class="fa-solid fa-copyright"></i>pymeshield
                            by Pymeralia</a>
                    </div>
                    <div class="col-6 col-md-3">
                        <h6 id="title-footer">Acerca de Pymeralia</h6>
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#" class="text-light">Pol??tica de privacidad</a>
                            </li>
                            <li>
                                <a href="#" class="text-light">Pol??tica de cookies</a>
                            </li>
                            <li>
                                <a href="#" class="text-light">Aviso legal</a>
                            </li>
                            <li>
                                <a href="#" class="text-light">Ley de protecci??n</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3">
                        <h6 id="title-footer">Contacto</h6>
                        <p><i class="fa-solid fa-phone"></i>682849274 <br> <i
                                class="fa-solid fa-envelope"></i>support@pymeralia.com</p>
                    </div>
                    <div class="col-6 col-md-3">
                        <h6 id="title-footer">RRSS</h6>
                        <ul class="list-unstyled mb-0" id="footer-rrss">
                            <li>
                                <a class="text-light" href="#"><i class="fa-brands fa-tiktok"></i></a>
                                <a class="text-light" href="#"><i class="fa-brands fa-twitter"></i></a>
                            </li>
                            </li>
                            <li>
                                <a class="text-light" href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a class="text-light" href="#"><i class="fa-brands fa-facebook"></i></a>
                            </li>
                            <li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>