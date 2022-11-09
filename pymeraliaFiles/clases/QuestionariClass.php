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
  
  /**
   * getEstat
   *
   * @return void
   */
  public function getEstat() {
    return $this->estat;
  }
  
  /**
   * getPreguntes
   *
   * @return void
   */
  public function getPreguntes () {
    return $this-> preguntes;
  }
  
  /**
   * getRespostes
   *
   * @return void
   */
  public function getRespostes () {
    return $this-> respostes;
  }
  
  /**
   * setEstat
   *
   * @param  mixed $estat
   * @return void
   */
  public function setEstat($estat) {
    $this-> estat = $estat;
  }
  
  /**
   * setPreguntes
   *
   * @param  mixed $preguntes
   * @return void
   */
  public function setPreguntes($preguntes) {
    $this -> preguntes = $preguntes;
  }
  
  /**
   * setRespostes
   *
   * @param  mixed $respostes
   * @return void
   */
  public function setRespostes($respostes) {
    $this -> respostes = $respostes;
  }

  /** CRUD Questionari */
  //private function addQuestionari()
  public function addQuestionari($nombreCuestionario, $representante, $empresa, $autor, $fecha){
    ///***Include del archivo que permite conectarnos a la base de datos
    include "../includes/config-connexio.php";

    if(isset($_POST['Nombre-Cuestionario']) != ""){
          
      ///*** Query que hace el Insert a la base de datos
      $query = "INSERT INTO `test_questionari`(`Nom`, `Representant`, `Empresa`, `Autor`, `Fecha`) VALUES ('$nombreCuestionario','$representante', '$empresa','$autor','$fecha')";

      //$resultQueryInsert = mysqli_query($conn, $query);
              
      if($conn->query($query) != ""){
        header("Location: ../admin/Llistat-QUestionaris.php");
      }else{
        header("Location: ../admin/Llistat-QUestionaris.php");
      }
      
      ///***Include del archivo que permite desconectarnos a la base de datos
      include "../includes/config-desconnexio.php";
    }
  }
  
  private function editQuestionari(){
  }
  
  private function deleteQuestionari(){
  }
  
  /**
   * Consulta que fa un SELECT a la base de dades per a mostrar els camps de la taula seleccionada
   * 
   * showQuestionari
   *
   * @param mixed $tabla
   * return void
   */
  public function showQuestionari($tabla){
    ///***Include del archivo que permite conectarnos a la base de datos
    include "../includes/config-connexio.php";

    $sql = "SELECT * FROM $tabla";
    $result = mysqli_query($conn, $sql);

    return $result;

    header("Location: ../admin/Llistat-Preguntes.html");

    ///***Include del archivo que permite desconectarnos a la base de datos
    include "../includes/config-desconnexio.php";
  }
}

?>
