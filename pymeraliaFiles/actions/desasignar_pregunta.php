<?php
    include "../clases/QuestionariClass.php";

    ///*** variables que pasan por método POST y recinimos con el método GET mediante formulario
    $name_questionary = $_GET['name_questionary'];
    $id_question = $_GET['id_question'];

    ///*** Instanciamos el objeto con los parámetros
    $preguntaDesasignar = new Questionari($id_question, $name_questionary);

    ///*** Llamamos al método deleteQuestionari() del objeto creado
    $preguntaDesasignar->unassignQuestion();