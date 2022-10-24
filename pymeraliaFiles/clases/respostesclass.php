<?php 

include './connect.php';
class Respostes {
    private $resposta;
    private $impacte;
    private $tipusMesura;
    private $recomanacio;

  function construct($resposta, $impacte, $tipusMesura, $recomanacio) {
    $this->resposta = $resposta;
    $this->impacte = $impacte;
    $this->tipusMesura = $tipusMesura;
    $this->recomanacio = $recomanacio;
  }

  function get_resposta() {
    return $this->resposta;
  }

  function set_resposta() {
    return $this->resposta;
  }
  function get_impacte() {
    return $this->impacte;
  }

  function set_impacte() {
    return $this->impacte;
  }
  function get_tipusMesura() {
    return $this->tipusMesura;
  }
  function set_tipusMesura() {
    return $this->tipusMesura;
  }

  function set_recomanacio() {
    return $this->recomanacio;
  }
  function get_recomanacio() {
    return $this->recomanacio;
  }
}

?>