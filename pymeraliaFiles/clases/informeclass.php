<?php 
include './connect.php';
class Informe {
    private $estat;
    private $resum;
    private $data;
  // Methods
  function construct($estat, $resum, $data) {
    $this->estat = $estat;
    $this->resum = $resum;
    $this->data = $data;
  }

  function getEstat() {
    return $this->estat;
  }

  function setEstat() {
    return $this->estat;
  }

  function getResum() {
    return $this->resum;
  }

  function getData() {
    return $this->data;
  }

}

?>
