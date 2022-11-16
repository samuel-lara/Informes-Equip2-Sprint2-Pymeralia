<?php 

include './connect.php';
class Respostes {
    private $resposta;
    private $impacte;
    private $tipusMesura;
    private $recomanacio;

  function __construct($resposta, $impacte, $tipusMesura, $recomanacio) {
    $this->resposta = $resposta;
    $this->impacte = $impacte;
    $this->tipusMesura = $tipusMesura;
    $this->recomanacio = $recomanacio;
  }

  //GETTERS I SETTERS

  function get_resposta() {
    return $this->resposta;
  }

  function get_impacte() {
    return $this->impacte;
  }

  function get_tipusMesura() {
    return $this->tipusMesura;
  }

  function get_recomanacio() {
    return $this->recomanacio;
  }


  function set_resposta($resposta) {
    $this->resposta = $resposta;
  }

  function set_impacte($impacte) {
    $this->impacte = $impacte;
  }

  function set_tipusMesura($tipusMesura) {
    $this->tipusMesura = $tipusMesura;
  }

  function set_recomanacio($recomanacio) {
    $this->recomanacio = $recomanacio;
  }



  //CRUD

  public function addResposta(){
    include './connect.php';

    $sql = "INSERT INTO `answers`(`Name_answer`, `Description_answer`, `hidden`, `Id_question) VALUES (‘Si','La xarxa té una contrasenya segura', 0, 1);";

    if ($conn-> query($sql) == TRUE){
      echo "S'ha afegit";
    } else {
      echo "Error:. " . $sql . "<br>" . $conn->error;
    }
    $conn->close();

    $result = mysqli_query($conn, $sql);
  }

    private function editResposta(){
      include './connect.php';
      
    }

  private function deleteResposta(){

  }

  public function showResposta(){
  
  }
}
