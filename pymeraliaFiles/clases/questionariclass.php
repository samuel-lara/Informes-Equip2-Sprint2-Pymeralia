<?php 
include './connect.php';
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

  function get_estat() {
    return $this->estat;
  }

  function setEstat($estat) {
    $this-> estat = $estat;
  }

  function get_preguntes () {
    return $this-> preguntes;
  }

  function setPreguntes($preguntes) {
    $this -> preguntes = $preguntes;
  }

  function get_respostes () {
    return $this-> respostes;
  }

  function set_respostes($respostes) {
    $this -> respostes = $respostes;
  }

}

?>
