<?php 
class Questionari {
    private $estat;
    private $preguntes;
    private $respostes;
  // Methods
  function construct($preguntes, $respostes, $estat) {
    $this->preguntes = $preguntes;
    $this->respostes = $respostes;
    $this->estat = $estat;
  }

  function getEstat() {
    return $this->estat;
  }

  function getPreguntes () {
    return $this-> preguntes;
  }

  function getRespostes () {
    return $this-> respostes;
  }

  function setEstat($estat) {
    $this-> estat = $estat;
  }

  function setPreguntes($preguntes) {
    $this -> preguntes = $preguntes;
  }

  function setRespostes($respostes) {
    $this -> respostes = $respostes;
  }

}

?>
