<?php 

class Informe {
    private $id_user;
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

  function __construct1($user_id){
    $this->id_user = $user_id;
  }
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

  public function mostrarInformesUsuari(){

    include '../includes/config-connexio.php';

    $sql = "SELECT * FROM reports WHERE id_user = $this->id_user";
    $result = mysqli_query($conn, $sql);

    return $result;

    include '../includes/config-desconnexio.php'; 
  }


}
