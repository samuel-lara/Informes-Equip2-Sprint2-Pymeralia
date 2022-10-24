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

  public function getEstat() {
    return $this->estat;
  }

  public function getPreguntes () {
    return $this-> preguntes;
  }

  public function getRespostes () {
    return $this-> respostes;
  }

  public function setEstat($estat) {
    $this-> estat = $estat;
  }

  public function setPreguntes($preguntes) {
    $this -> preguntes = $preguntes;
  }

  public function setRespostes($respostes) {
    $this -> respostes = $respostes;
  }

}

?>
