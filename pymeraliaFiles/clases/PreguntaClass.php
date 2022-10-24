<?php

class Pregunta {
    private $id;
    private $pregunta;

    public function __construct($id, $pregunta){
        $this->id = $id;
        $this->pregunta = $pregunta;

    }

    public function getId() {
        return $this->id;
    }

    public function getIregunta() {
        return $this->pregunta;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setPregunta($pregunta) {
        $this->pregunta = $pregunta;
    }


   
  private function addPregunta(){

  }
  

   
  private function editPregunta(){

  }
  
    
   
  private function deletePregunta(){

  }
  
   
   
  public function showPregunta(){

  }
}

?>