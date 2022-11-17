<?php
    include_once "../clases/QuestionariClass.php";

    //Comprobamos si recibimos los datos por método GET desde el archivo php del que mandamos llamar
    if(isset($_GET["id"]))
    {
        $id_cuestionario = $_GET["id"];
    }

    //Intanciamos un objeto para trabajar con el al que le pasamos un parámetro
    $cuestionarioPreguntas = new Questionari($id_cuestionario);

    //llamamos al método estatico showQuestionari para poder acceder a los campos de la tabla questionary
    $resultadoCuestionario = Questionari::showQuestionari();
    $mostrarCuestionario = mysqli_fetch_array($resultadoCuestionario);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Preguntas-<?php echo $mostrarCuestionario['name_questionary']?></title><!--se modifica el title dependiendo de cada cuestionario-->
    <script src="../scripts/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/barraBusqueda.css">
    <link href="../css/fontawesome.min.css" rel="stylesheet">
    <link href="../css/brands.min.css" rel="stylesheet">
    <link href="../css/solid.min.css" rel="stylesheet">
    <script src="../scripts/checkbox.js"></script>
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
                          </ul>
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
            <button class="btn btn-primary btn-sm" id="boton_asignar_preguntas_questionario" onclick="">Asignar Preguntas al Cuestionario</button>
        </div>

        
      </div>
    </div><!--Asignar Preguntas-->

    <div class="container overflow-hidden text-center py-3" id="cuerpo">
        <div class="container overflow-hidden text-center py-3">
            <h2>Preguntas Asignadas - <?php echo $mostrarCuestionario['name_questionary']?></h2>
        </div>
        <div>
            <table class="table table-striped align-middle container overflow-hidden text-center py-3">
                <thead>
                    <tr>
                        <th scope="col"><input type="checkbox" onclick="marcar(this)"></th>
                        <th scope="col">Nombre Pregunta</th>
                        <th scope="col">Descripción Pregunta</th>
                        <th scope="col"><button class="btn btn-danger btn-sm">Desasignar toda la selección</button></th><!--Desasignar toda la Selección-->
                    </tr>
                </thead>

                <!--Tabla que se autogenera con los campos de la base de datos-->
                <tbody>
                    <?php 
                      ///*** Mostramos la lista de todas las preguntas que corresponden al cuestionario usando el método sobre el objeto creado */
                      $resultado = $cuestionarioPreguntas->showQuestionariPreguntes();

                      while($mostrar = mysqli_fetch_array($resultado)){
                    ?>
                    <tr>
                        <th scope="row"><input type="checkbox"></th>
                        <td id="name_question_<?php echo $mostrar['id_questionary']?>"> <?php echo $mostrar['name_question']?></td><!--Nombre Pregunta-->
                        <td id="autor_question_edit_<?php echo $mostrar['id_questionary']?>"> <?php echo $mostrar['description_question']?></td><!--Descripción/Cuerpo pregunta-->
                        
                        <td>
                          <div class="d-flex justify-content-center">
                        
                            <form action="../actions/desasignar_pregunta.php?id_questionary=<?php echo $mostrarCuestionario['id_questionary']?>&id_question=<?php echo $mostrar['id_question'] ?>" method="POST">
                              <input type="hidden" value="<?php $mostrar['id_questionary'] ?>" name="input_desasignar">
                              <button type="submit" class="btn btn-danger btn-sm mx-2">Desasignar</button>
                            </form><!--botón Desasignar-->

                          </div>
                        </td>
                    </tr>

                    <?php 
                    }
                    ?>
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


    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../scripts/mostrar_modals_questionari.js"></script>
</body>


</html>