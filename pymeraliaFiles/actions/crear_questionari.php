<?php
    include "../clases/QuestionariClass.php";

        ///*** variables que pasan por método POST mediante formulario
        $nombre_cuestionario = $_POST['name_questionary'];
        $autor_cuestionario = $_POST['autor_questionary'];
        $fecha_cuestionario = $_POST['date_questionary'];

        ///*** Instanciamos el objeto con los parámetros
        $questionariCrear = new Questionari($nombre_cuestionario, $autor_cuestionario, $fecha_cuestionario);

        ///*** Llamamos al método addQuestionari() del objeto creado
        $questionariCrear->addQuestionari();