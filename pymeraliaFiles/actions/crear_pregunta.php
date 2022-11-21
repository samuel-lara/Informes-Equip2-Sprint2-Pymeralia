<?php
    include "../clases/PreguntaClass.php";

        ///*** variables que pasan por método POST mediante formulario
        $nombre_pregunta = $_POST['name_question'];
        $descripcion_preguna = $_POST['description_question'];

        ///*** Instanciamos el objeto con los parámetros
        $preguntaCrear = new Pregunta($nombre_pregunta, $descripcion_preguna);

        ///*** Llamamos al método addQuestionari() del objeto creado
        $preguntaCrear->addPregunta();