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
  
  /**
   * addQuestionari
   *
   * Método que crea un nuevo cuestionario en la base de datos
   * 
   * @param  mixed $nombre_cuestionario
   * @param  mixed $autor_cuestionario
   * @param  mixed $fecha_cuestionario
   * return void
   */
  public function addQuestionari($nombre_cuestionario, $autor_cuestionario, $fecha_cuestionario){
    ///***Include del archivo que permite conectarnos a la base de datos
    include "../includes/config-connexio.php";

    if(isset($_POST['name_questionary']) != ""){
          
      ///*** Query que hace el Insert a la base de datos con algunos parámetros prestablecidos
      $query = "INSERT INTO `questionnaries`(`name_questionary`, `autor_questionary`, `date_questionary`, `hidden`, `id_user`) VALUES ('$nombre_cuestionario','$autor_cuestionario','$fecha_cuestionario', 0, NULL)";

      ///*** Comprueba la conexión y la consulta, si la consulta es diferente a vacia entonces redirige a una página o a otra   
      if($conn->query($query) != ""){
        header("Location: ../admin/Llistat-Questionaris.php");
      }else{
        header("Location: ../admin/Llistat-Questionaris.php");
      }
      
      ///***Include del archivo que permite desconectarnos a la base de datos
      include "../includes/config-desconnexio.php";
    }
  }
  
  private function editQuestionari(){
  }
  





  public function deleteQuestionari(){
    ///***Include del archivo que permite conectarnos a la base de datos
    include "../includes/config-connexio.php";

    $query = "UPDATE questionnaires
    SET hidden = 1
    WHERE id_questionart = $id_cuestionario";

    //$result = mysqli_query($conn, $sql);

    ///*** Comprueba la conexión y la consulta, si la consulta es diferente a vacia entonces redirige a una página o a otra   
    if($conn->query($query) != ""){
      header("Location: ../admin/Llistat-Questionaris.php");
    }else{
      header("Location: ../admin/Llistat-Questionaris.php");
    }

    ///***Include del archivo que permite desconectarnos a la base de datos
    include "../includes/config-desconnexio.php";
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

    ///*** Consulta que recoge los campos filtrandolos por un campo para poder mostrar o no
    $sql = "SELECT * FROM $tabla WHERE hidden = 0";
    $result = mysqli_query($conn, $sql);

    return $result;

    ///***Include del archivo que permite desconectarnos a la base de datos
    include "../includes/config-desconnexio.php";
  }
}

?>
