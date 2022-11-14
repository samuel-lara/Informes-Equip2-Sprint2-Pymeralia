<?php
    include_once "../clases/QuestionariClass.php";

        $nombre_cuestionario = $_POST['name_questionary'];
        $autor_cuestionario = $_POST['autor_questionary'];
        $fecha_cuestionario = $_POST['date_questionary'];

        $questionariCrear = new Questionari();

        $questionariCrear->addQuestionari($nombre_cuestionario, $autor_cuestionario, $fecha_cuestionario);