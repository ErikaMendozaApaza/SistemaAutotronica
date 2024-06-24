<?php
class Usuarios extends Controller{
    public function __construct() {
        session_start();
        //ESTA SECCION VALIDA UNA SESSION ACTIVA

      /*   if(empty($_SESSION['activo'])){
            header("location: ".base_url);
        } */

        //HASTA AQUI VALIDA LA SESSION ACTIVA
        parent::__construct();
    }    
    public function index() {
        //print_r($this->model->getUsuario());
        $data['cajas']=$this->model->getCajas();
        $this->views->getView($this, "index",$data);
    }
    public function listar(){
        //print_r($this-> model->getUsuarios());
        $data=$this-> model->getUsuarios();
        //SECCION DE ESTADO Y ACCIONES
        for($i=0;$i<count($data);$i++){
            //MOSTRAR EN PANTALLA EL ESTADO ACTIVO O INACTIVO
            if($data[$i]['estado']==1){
                $data[$i]['estado']='<span class="badge badge-success">Activo</span>';
            }else{
                $data[$i]['estado']='<span class="badge badge-danger">Inactivo</span>';
            }
            //HASTA AQUI SE MUESTRA EL ESTADO
            $data[$i]['acciones']='<div>
            <button class="btn btn-primary" type="button" onclick="btnEditarUser('.$data[$i]['id'].');"><i class="fas fa-edit"></i></button>
            <button class="btn btn-danger" type="button" onclick="btnEliminarUser('.$data[$i]['id'].');"><i class="fas fa-trash-alt"></i></button>
            <button class="btn btn-success" type="button" onclick="btnReingresarUser('.$data[$i]['id'].');">Reingresar</button>
            </div>';
            //HASTA AQUI SE GENERAN LOS BOTONES DE EDITAR Y ELIMINAR
        }
        //HASTA AQUI SE GENERA LA SECCION DE ESTADO Y ACCIONES
        
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }
    public function validar(){
        if(empty($_POST['usuario']) || empty($_POST['clave'])){
            $msg="Los campos estan vacios";
        }else{
            $usuario=$_POST['usuario'];
            $clave=$_POST['clave'];
            $hash=hash("SHA256",$clave);
            $data=$this->model->getUsuario($usuario,$hash);
            if($data){
                $_SESSION['id_usuario']=$data['id'];
                $_SESSION['usuario']=$data['usuario'];
                $_SESSION['nombre']=$data['nombre'];
                //SESSION ACTIVA
                //$_SESSION['activo']=true;
                //
                $msg="ok";
            }else{
                $msg="Usuario o Contraseña incorrecta";
            }
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        //print_r($data);
        die();
    }
    function registrar(){
        //print_r($_POST);
        $usuario=$_POST['usuario'];
        $nombre=$_POST['nombre'];
        $clave=$_POST['clave'];
        $confirmar=$_POST['confirmar'];
        $caja=$_POST['caja'];
        $id=$_POST['id'];
        $hash=hash("SHA256",$clave);
        if(empty($usuario) || empty($nombre) || empty($caja)){
            $msg="Todos los campos son obligatorios";
        }else{
            if($id==""){
                if($clave!=$confirmar){
                    $msg="Las contraseñas no coinciden";
                }else{
                    $data=$this->model->registrarUsuario($usuario,$nombre,$hash,$caja);
                    if($data=="ok"){
                        $msg="si";
                    }else if($data=="existe"){
                        $msg="El usuario ya existe";
                    }else{
                        $msg="Error al registrar el usuario";
                    }
                }  
            }else{
                $data=$this->model->modificarUsuario($usuario,$nombre,$caja,$id);
                if($data=="modificado"){
                    $msg="modificado";
                }else{
                    $msg="Error al modificar el usuario";
                }
            }
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();

    }

    public function editar(int $id){
        $data=$this->model->editarUser($id);
        //print_r($data);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }
    public function eliminar(int $id){
        //print_r($id);
        $data=$this->model->accionUser(0, $id);
        if($data==1){
            $msg="ok";
        }else{
            $msg="Error al eliminar el usuario";
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }
    public function reingresar(int $id){
        //print_r($id);
        $data=$this->model->accionUser(1,$id);
        if($data==1){
            $msg="ok";
        }else{
            $msg="Error al reingresar el usuario";
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }
    public function salir(){
        session_destroy();
        header("location: ".base_url);
    }

}
?>

