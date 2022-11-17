<?php 
class Questionari {
  private $estat;
  private $preguntes;
  private $respostes;
  private $id;
  private $idQuestion;
  private $nombre_cuestionario;
  private $autor;
  private $fecha;


  // Contructors
  function __construct()
	{
		//obtengo un array con los parámetros enviados a la función
		$params = func_get_args();
		//saco el número de parámetros que estoy recibiendo
		$num_params = func_num_args();
		//cada constructor de un número dado de parámtros tendrá un nombre de función
		//atendiendo al siguiente modelo __construct1() __construct2()...
		$funcion_constructor ='__construct'.$num_params;
		//compruebo si hay un constructor con ese número de parámetros
		if (method_exists($this,$funcion_constructor)) {
			//si existía esa función, la invoco, reenviando los parámetros que recibí en el constructor original
			call_user_func_array(array($this,$funcion_constructor),$params);
		}
	}
  
	//ahora declaro una serie de métodos constructores que aceptan diversos números de parámetros

  function __construct1($id)
	{
		$this->id = $id;
	}

  function __construct2($id, $idQuestion)
	{
		$this->id = $id;
    $this->idQuestion = $idQuestion;
	}


    
  function __construct3($nombre_cuestionario, $autor, $fecha)
	{
		$this->nombre_cuestionario = $nombre_cuestionario;
    $this->autor = $autor;
    $this->fecha = $fecha;
	}

  function __construct4($id, $nombre_cuestionario, $autor, $fecha)
	{
    $this->id = $id;
		$this->nombre_cuestionario = $nombre_cuestionario;
    $this->autor = $autor;
    $this->fecha = $fecha;
	}
  



  /** Methods */
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
  public function addQuestionari(){
    ///***Include del archivo que permite conectarnos a la base de datos
    include "../includes/config-connexio.php";

    ///*** Condició que comprova si la variable que pasem per POST esta buida o plena
    if(isset($_POST['name_questionary']) != ""){
          
      ///*** Query que hace el Insert a la base de datos con algunos parámetros prestablecidos
      $query = "INSERT INTO `questionnaries`(`name_questionary`, `autor_questionary`, `date_questionary`, `hidden`, `id_user`) VALUES ('$this->nombre_cuestionario','$this->autor','$this->fecha', 0, NULL)";

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
  


  
  /**
   * editQuestionari
   * 
   * Edita los datos del cuestionario que se escoja
   *
   * return void
   */
  public function editQuestionari(){
    ///***Include del archivo que permite conectarnos a la base de datos
    include "../includes/config-connexio.php";

    ///*** query que genera la consulta y actualiza el campo en la base de datos
    $queryUpdate = "UPDATE `questionnaries` SET `name_questionary`='$this->nombre_cuestionario', `autor_questionary`='$this->autor', `date_questionary`='$this->fecha' WHERE `id_questionary`=$this->id";

    ///*** Comprueba la conexión y la consulta, si la consulta es diferente a vacia entonces redirige a una página o a otra   
    if($conn->query($queryUpdate)){
      ///***Include del archivo que permite desconectarnos a la base de datos
      include "../includes/config-desconnexio.php";
      header("Location: ../admin/Llistat-Questionaris.php");
    }else{
      include "../includes/config-desconnexio.php";
      header("Location: ../admin/Llistat-Questionaris.php");
    }

    //Desconexió de la base de dades
    include "../includes/config-desconnexio.php";
  }
  




  
  /**
   * deleteQuestionari
   * 
   * Cambia el campo hidden de 0 a 1 para ocultar el registro correspondiente simulando que se ha eliminado,
   * pero tan solo se ha ocultado.
   *
   * return void
   */
  public function deleteQuestionari(){
    ///***Include del archivo que permite conectarnos a la base de datos
    include "../includes/config-connexio.php";

    ///*** query
    $query = "UPDATE `questionnaries` SET `hidden`= 1 WHERE `id_questionary`= $this->id";

    
    ///*** Comprueba la conexión y la consulta, si la consulta es diferente a vacia entonces redirige a una página o a otra   
    if($conn->query($query)){
      ///***Include del archivo que permite desconectarnos a la base de datos
      include "../includes/config-desconnexio.php";
      header("Location: ../admin/Llistat-Questionaris.php");
    }else{
      include "../includes/config-desconnexio.php";
      header("Location: ../admin/Llistat-Questionaris.php");
    }

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
  public static function showQuestionari(){
    ///***Include del archivo que permite conectarnos a la base de datos
    include "../includes/config-connexio.php";

    ///*** Consulta que recoge los campos filtrandolos por un campo para poder mostrar o no
    $sql = "SELECT * FROM `questionnaries` WHERE hidden = 0";
    $result = mysqli_query($conn, $sql);

    

    return $result;

    ///***Include del archivo que permite desconectarnos a la base de datos
    include "../includes/config-desconnexio.php";
  }


  

  /**
   * showQuestionariPreguntes
   *
   * Muestra todas las preguntas asignadas a un cuestionario
   * 
   * return void
   */
  public function showQuestionariPreguntes(){
    ///***Include del archivo que permite conectarnos a la base de datos
    include "../includes/config-connexio.php";

    ///*** Consulta que recoge los campos filtrandolos por dos campos para poder mostrar o no
    $sql = "SELECT * FROM `questions` WHERE `id_questionary` = $this->id AND hidden = 0";
    $resultado = mysqli_query($conn, $sql);

    

    return $resultado;

    ///***Include del archivo que permite desconectarnos a la base de datos
    include "../includes/config-desconnexio.php";
  }

  
  /**
   * FALTA ARREGLAR!!
   * 
   * unassignQuestion
   * 
   *Método que quita la asignacion de una pregunta a un cuestionario poniendola en NULL y asi poder asignarla en otro cuestionario
   * 
   * return void
   */
  public function unassignQuestion(){
    ///***Include del archivo que permite conectarnos a la base de datos
    include "../includes/config-connexio.php";

    ///*** query
    $query = "UPDATE `questions` SET `id_questionary`= NULL WHERE `id_question`= $this->idQuestion";


    ///*** Comprueba la conexión y la consulta, si la consulta es diferente a vacia entonces redirige a una página o a otra   
    if($conn->query($query)){
      ///***Include del archivo que permite desconectarnos a la base de datos
      include "../includes/config-desconnexio.php";
      //Los header location se les pasa la variable id para poder redirigir a la página ya que se pasa por get y hay que coger la URL
      header("Location: ../admin/Llistat-Preguntes-Questionari.php?id=$this->idQuestion");
    }else{
      include "../includes/config-desconnexio.php";
      header("Location: ../admin/Llistat-Preguntes-Questionari.php?id=$this->idQuestion");
    }

    include "../includes/config-desconnexio.php";
  }
  
}

?>
