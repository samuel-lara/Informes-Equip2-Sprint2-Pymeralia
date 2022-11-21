<?php
    include "../clases/QuestionariClass.php";

    ///*** variables que pasan por método POST y recinimos con el método GET mediante formulario
    $id_questionary = $_GET['id_questionary'];
    $id_question = $_GET['id_question'];

    ///*** Instanciamos el objeto con los parámetros
    $preguntaDesasignar = new Questionari($id_questionary, $id_question);


    ///*** Llamamos al método deleteQuestionari() del objeto creado
    $preguntaDesasignar->unassignQuestion();