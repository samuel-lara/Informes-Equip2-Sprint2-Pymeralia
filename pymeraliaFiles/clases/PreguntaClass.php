<?php

class Pregunta {
    private $id;
    private $nombre_pregunta;
    private $descripcion_pregunta;

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

    function __construct1($id)
	{
		$this->id = $id;
	}


    
  function __construct3($nombre_pregunta, $descripcion_pregunta)
	{
	    $this->nombre_pregunta = $nombre_pregunta;
        $this->descripcion_pregunta = $descripcion_pregunta;
	}

    public function getId() {
        return $this->id;
    }

    public function getNombrePregunta() {
        return $this->nombre_pregunta;
    }

    public function getDescripcionPregunta() {
        return $this->descripcion_pregunta;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNombrePregunta($nombre_pregunta) {
        $this->pregunta = $nombre_pregunta;
    }
    public function setDescripcionPregunta($descripcion_pregunta) {
        $this->pregunta = $descripcion_pregunta;
    }


   
  public function addPregunta(){
     ///***Include del archivo que permite conectarnos a la base de datos
     include "../includes/config-connexio.php";

     ///*** Condició que comprova si la variable que pasem per POST esta buida o plena
     if(isset($_POST['name_question']) != ""){
           
       ///*** Query que hace el Insert a la base de datos con algunos parámetros prestablecidos
       $query = "INSERT INTO `questions`(`name_question`, `description_question`, `hidden`, `id_user`) VALUES ('$this->nombre_pregunta','$this->descripcion_pregunta', 0, NULL)";
 
       ///*** Comprueba la conexión y la consulta, si la consulta es diferente a vacia entonces redirige a una página o a otra   
       if($conn->query($query) != ""){
         header("Location: ../admin/Llistat-Preguntes.php");
       }else{
         header("Location: ../admin/Llistat-Preguntes.php");
       }
       
       ///***Include del archivo que permite desconectarnos a la base de datos
       include "../includes/config-desconnexio.php";
     }

  }
  

   
  private function editPregunta(){

  }
  
    
   
  public function deletePregunta(){
     ///***Include del archivo que permite conectarnos a la base de datos
     include "../includes/config-connexio.php";

     ///*** query
     $query = "UPDATE `questions` SET `hidden`= 1 WHERE `id_question`= $this->id";
 
     
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
  
   
   
  public static function showPregunta(){

    include "../includes/config-connexio.php";

    ///*** Consulta que recoge los campos filtrandolos por un campo para poder mostrar o no
    $sql = "SELECT * FROM `questions` WHERE hidden = 0";
    $result = mysqli_query($conn, $sql);

    

    return $result;

    ///***Include del archivo que permite desconectarnos a la base de datos
    //include "../includes/config-desconnexio.php";
  }
}


?>