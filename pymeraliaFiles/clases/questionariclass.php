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

  function set_estat() {
    return $this->estat;
  }
}

?>
