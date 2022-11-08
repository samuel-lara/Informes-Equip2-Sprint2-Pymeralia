<?php 




class Questionari {
    private $estat;
    private $preguntes;
    private $respostes;
  // Methods
  /*function construct($preguntes, $respostes, $estat) {
    $this->preguntes = $preguntes;
    $this->respostes = $respostes;
    $this->estat = $estat;
  }*/

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

  /** CRUD Questionari */  
/*
  private function addQuestionari($conn){
    if(isset($_POST['Nombre-Cuestionario'])){
      $nombreCuestionario = $_POST['Nombre-Cuestionario'];
      $representante = $_POST['Representante'];
      $empresa = $_POST['Empresa'];
      $autor = $_POST['Autor'];
      $fecha = $_POST['Fecha'];
              
      ///*** Query que hace el Insert a la base de datos
      $query = "INSERT INTO `test_questionari`(`Nom`, `Representant`, `Empresa`, `Autor`, `Fecha`) VALUES ('$nombreCuestionario','$representante', '$empresa','$autor','$fecha')";
              
      $resultQueryInsert = mysqli_query($conn, $query);

      return $resultQueryInsert;
    }
  }*/
  
  private function editQuestionari(){
  }
  
  private function deleteQuestionari(){
  }
  
  /** Consulta que fa un SELECT a la base de dades */
  public function showQuestionari($tabla){
    ///***Include del archivo que permite conectarnos a la base de datos
    include_once "../includes/config-connexio.php";
    $sql = "SELECT * FROM $tabla";
    $result = mysqli_query($conn, $sql);

    return $result;
  }
}



?>
