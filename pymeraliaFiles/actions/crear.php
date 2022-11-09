<?php
    include_once "../clases/QuestionariClass.php";

        $nombreCuestionario = $_POST['Nombre-Cuestionario'];
        $representante = $_POST['Representante'];
        $empresa = $_POST['Empresa'];
        $autor = $_POST['Autor'];
        $fecha = $_POST['Fecha'];

        $questionariCrear = new Questionari();

        $questionariCrear->addQuestionari($nombreCuestionario, $representante, $empresa, $autor, $fecha);