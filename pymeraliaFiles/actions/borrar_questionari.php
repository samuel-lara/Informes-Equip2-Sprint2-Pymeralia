<?php
    include "../clases/QuestionariClass.php";

    ///*** variables que pasan por método POST mediante formulario
    $id_cuestionario = $_GET['id'];

    ///*** Instanciamos el objeto con los parámetros
    $questionariEliminar = new Questionari($id_cuestionario);

    ///*** Llamamos al método deleteQuestionari() del objeto creado
    $questionariEliminar->deleteQuestionari();

