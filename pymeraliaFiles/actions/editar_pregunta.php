<?php
    include "../clases/PreguntaClass.php";

        ///*** variables que pasan por método POST mediante formulario
        $id_pregunta = $_POST['id_question'];
        $nombre_pregunta = $_POST['name_question'];
        $descripcion_pregunta = $_POST['autor_questionary'];
       
        

        ///*** Instanciamos el objeto con los parámetros
        $preguntaEditar = new Pregunta($id_pregunta, $nombre_pregunta, $descripcion_pregunta);

        ///*** Llamamos al método addQuestionari() del objeto creado
        $preguntaEditar->editPregunta();