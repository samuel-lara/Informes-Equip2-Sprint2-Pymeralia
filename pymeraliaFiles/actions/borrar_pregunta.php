<?php
    include "../clases/QuestionariClass.php";

    ///*** variables que pasan por método POST mediante formulario
    $id_pregunta = $_GET['id'];

    ///*** Instanciamos el objeto con los parámetros
    $preguntaEliminar = new Pregunta($id_pregunta);

    ///*** Llamamos al método deleteQuestionari() del objeto creado
    $preguntaEliminar->deletePregunta()();
