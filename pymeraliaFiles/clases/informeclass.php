<?php 
include './connect.php';
/**
 * Informe
 */
class Informe {
    private $estat;
    private $data;
    private $resum;
    private $nivellRisc;
    private $intervencio;

  // Methods  
  /**
   * __construct
   *
   * @param  mixed $estat
   * @param  mixed $resum
   * @param  mixed $data
   * @param  mixed $nivellRisc
   * @param  mixed $intervencio
   * @return void
   */
  function __construct($estat, $resum, $data, $nivellRisc, $intervencio) {
    $this->estat = $estat;
    $this->resum = $resum;
    $this->data = $data;
    $this->nivellRisc = $nivellRisc;
    $this->intervencio = $intervencio;
  }

  /** GETTERS i SETTERS */  
  /**
   * getEstat
   *
   * @return void
   */
  function getEstat() {
    return $this->estat;
  }
  
  /**
   * getData
   *
   * @return void
   */
  function getData() {
    return $this->data;
  }
  
  /**
   * getResum
   *
   * @return void
   */
  function getResum() {
    return $this->resum;
  }
  
  /**
   * getNivellRisc
   *
   * @return void
   */
  function getNivellRisc() {
    return $this->nivellRisc;
  }
  
  /**
   * getIntervencio
   *
   * @return void
   */
  function getIntervencio() {
    return $this->intervencio;
  }

  
  /**
   * setEstat
   *
   * @param  mixed $estat
   * @return void
   */
  function setEstat($estat) {
    $this->estat = $estat;
  }
  
  /**
   * setResum
   *
   * @param  mixed $resum
   * @return void
   */
  function setResum($resum) {
    $this->resum = $resum;
  }
  
  /**
   * setData
   *
   * @param  mixed $data
   * @return void
   */
  function setData($data) {
    $this->data = $data;
  }
  
  /**
   * setNivellRisc
   *
   * @param  mixed $nivellRisc
   * @return void
   */
  function setNivellRisc($nivellRisc) {
    $this->nivellRisc = $nivellRisc;
  }
  
  /**
   * setIntervecio
   *
   * @param  mixed $intervencio
   * @return void
   */
  function setIntervecio($intervencio) {
    $this->intervencio = $intervencio;
  }


  /** CRUD */  
  /**
   * addInforme
   *
   * @return void
   */
  private function addInforme(){

  }
  
  /**
   * editInforme
   *
   * @return void
   */
  private function editInforme(){

  }
  
  /**
   * deleteInforme
   *
   * @return void
   */
  private function deleteInforme(){

  }
  
  /**
   * showInforme
   *
   * @return void
   */
  public function showInforme(){

  }

  /** METODES */  
  /**
   * calcularProbabilitatImpacte
   *
   * @return void
   */
  private function calcularProbabilitatImpacte(){

  }
}
