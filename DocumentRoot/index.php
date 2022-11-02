<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Questionarios</title>
    <script src="../pymeraliaFiles/scripts/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../pymeraliaFiles/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../pymeraliaFiles/css/main.css">
    <link rel="stylesheet" href="../pymeraliaFiles/css/barraBusqueda.css">
    <link href="../pymeraliaFiles/css/fontawesome.min.css" rel="stylesheet">
    <link href="../pymeraliaFiles/css/brands.min.css" rel="stylesheet">
    <link href="../pymeraliaFiles/css/solid.min.css" rel="stylesheet">
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
                                                class="fa-solid fa-right-from-bracket"></i>Cerrar Sesión</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="../cliente/index.html"><i class="fa-solid fa-shield-halved"></i>Modo Usuario</a></li>
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
                        <li class="nav-item"><a class="nav-link" href="#"><i
                                    class="fa-solid fa-clipboard"></i>Questionarios</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i
                                    class="fa-solid fa-book"></i>Informes</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i
                                    class="fa-solid fa-graduation-cap"></i>Formación</a>
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
            <button class="btn btn-primary btn-sm" id="boton-crear-questionario">Crear Questionario</button>
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
            <h2>Lista Questionarios</h2>
        </div>
        <div>
            <table class="table table-striped align-middle container overflow-hidden text-center py-3">
                <thead>
                    <tr>
                        <th scope="col"><input type="checkbox"></th>
                        <th scope="col">Nombre Questionario</th>
                        <th scope="col">Representante</th>
                        <th scope="col">Empresa</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Fecha</th>
                        <th scope="col"><button class="btn btn-danger btn-sm">Eliminar toda la selección</button><!--Editar i Eliminar--></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><input type="checkbox"></th>
                        <td id="nombre-questionario-1">Questionario 1</td><!--Nombre Questionario-->
                        <td>Toni Morant</td><!--Representante-->
                        <td>Institut Montsià</td><!--Empresa-->
                        <td>Samuel Lara</td><!--Autor-->
                        <td>22/11/2022</td><!--Fecha-->
                        <td><button class="btn btn-warning btn-sm" id="editar-questionari-1" onclick="showModal('Toni')">Editar</button> <button class="btn btn-danger btn-sm">Eliminar</button></td><!--Editar i Eliminar-->
                    </tr>
                    <tr>
                        <th scope="row"><input type="checkbox"></th>
                        <td>Questionario 2</td><!--Nombre Questionario-->
                        <td>Xavi Fibla</td><!--Representante-->
                        <td>Fibla S.L.</td><!--Empresa-->
                        <td>Ivan Sorribes</td><!--Autor-->
                        <td>14/10/2022</td><!--Fecha-->
                        <td><button class="btn btn-warning btn-sm" data-bs-target="#exampleModal" onclick="showModal('Samuel')">Editar</button> <button class="btn btn-danger btn-sm">Eliminar</button></td><!--Editar i Eliminar-->
                    </tr>
                    <tr>
                        <th scope="row"><input type="checkbox"></th>
                        <td>Questionario 3</td><!--Nombre Questionario-->
                        <td>Joan Iglesias</td><!--Representante-->
                        <td>Empatica</td><!--Empresa-->
                        <td>Yasir Hayati</td><!--Autor-->
                        <td>09/09/2022</td><!--Fecha-->
                        <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="showModal('Pablo')">Editar</button> <button class="btn btn-danger btn-sm">Eliminar</button></td><!--Editar i Eliminar-->
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <!--Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Editar Questionario</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Nombre Questionario:</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Representante:</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                    <label for="message-text" class="col-form-label">Empresa:</label>
                    <input type="text" class="form-control" id="recipient-name">
                  </div>
                  <div class="mb-3">
                    <label for="message-text" class="col-form-label">Autor:</label>
                    <input type="text" class="form-control" id="recipient-name">
                  </div>
                  <div class="mb-3">
                    <label for="message-text" class="col-form-label">Fecha:</label>
                    <input type="text" class="form-control" id="recipient-name">
                  </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary">Guardar Questionario</button>
            </div>
          </div>
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
                                <a href="#" class="text-light">Política de privacidad</a>
                            </li>
                            <li>
                                <a href="#" class="text-light">Política de cookies</a>
                            </li>
                            <li>
                                <a href="#" class="text-light">Aviso legal</a>
                            </li>
                            <li>
                                <a href="#" class="text-light">Ley de protección</a>
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
    <script src="../pymeraliaFiles/scripts/modal-editar-questionari.js"></script>
</body>

</html>