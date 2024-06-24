<?php
class Home extends Controller{
    public function __construct() {
        session_start();
         //ESTA SECCION VALIDA UNA SESSION ACTIVA
         /* if(!empty($_SESSION['activo'])){
            header("location: ".base_url."Usuarios");
        } */
        //HASTA AQUI VALIDA LA SESSION ACTIVA
        parent::__construct();
    }
    public function index() {
        $this->views->getView($this, "index");

    }
}
?>