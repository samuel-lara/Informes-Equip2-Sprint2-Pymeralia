<?php 

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
  //function __construct($estat, $resum, $data, $nivellRisc, $intervencio) {
  //  $this->estat = $estat;
  //  $this->resum = $resum;
  //  $this->data = $data;
  //  $this->nivellRisc = $nivellRisc;
  //  $this->intervencio = $intervencio;
  //}

  /** GETTERS i SETTERS */  
  /**
   * getEstat
   *
   * @return void
   */
  public function getEstat() {
    return $this->estat;
  }
  
  /**
   * getData
   *
   * @return void
   */
  public function getData() {
    return $this->data;
  }
  
  /**
   * getResum
   *
   * @return void
   */
  public function getResum() {
    return $this->resum;
  }
  
  /**
   * getNivellRisc
   *
   * @return void
   */
  public function getNivellRisc() {
    return $this->nivellRisc;
  }
  
  /**
   * getIntervencio
   *
   * @return void
   */
  public function getIntervencio() {
    return $this->intervencio;
  }

  
  /**
   * setEstat
   *
   * @param  mixed $estat
   * @return void
   */
  public function setEstat($estat) {
    $this->estat = $estat;
  }
  
  /**
   * setResum
   *
   * @param  mixed $resum
   * @return void
   */
  public function setResum($resum) {
    $this->resum = $resum;
  }
  
  /**
   * setData
   *
   * @param  mixed $data
   * @return void
   */
  public function setData($data) {
    $this->data = $data;
  }
  
  /**
   * setNivellRisc
   *
   * @param  mixed $nivellRisc
   * @return void
   */
  public function setNivellRisc($nivellRisc) {
    $this->nivellRisc = $nivellRisc;
  }
  
  /**
   * setIntervecio
   *
   * @param  mixed $intervencio
   * @return void
   */
  public function setIntervecio($intervencio) {
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
  public function deleteInforme($table, $id){
    include "../includes/config-connexio.php";

    $sqlQuery = "DELETE FROM $table WHERE Id_Informe = $id;";
    $result = mysqli_query($conn, $sqlQuery);

    return $result;

    include "../includes/config-desconnexio.php";
  }
  
  /**
   * showInforme
   *
   * @return void
   */
  public function showInforme($table){
    include "../includes/config-connexio.php";

    $sqlQuery = "SELECT * FROM $table";
    $result = mysqli_query($conn, $sqlQuery);

    return $result;

    include "../includes/config-desconnexio.php";
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
?>