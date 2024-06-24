<?php
class Servicios extends Controller{
    public function __construct() {
        session_start();
        //ESTA SECCION VALIDA UNA SESSION ACTIVA
/*         if(empty($_SESSION['activo'])){
            header("location: ".base_url);
        } */
        //HASTA AQUI VALIDA LA SESSION ACTIVA
        parent::__construct();
    }    
    public function index() {
        //print_r($this->model->getUsuario());
        $this->views->getView($this, "index");
    }
    public function listar(){
        //print_r($this-> model->getUsuarios());
        $data=$this-> model->getServicios();
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
            <button class="btn btn-primary" type="button" onclick="btnEditarServicio('.$data[$i]['id'].');"><i class="fas fa-edit"></i></button>
            <button class="btn btn-danger" type="button" onclick="btnEliminarServicio('.$data[$i]['id'].');"><i class="fas fa-trash-alt"></i></button>
            <button class="btn btn-success" type="button" onclick="btnReingresarServicio('.$data[$i]['id'].');">Reingresar</button>
            </div>';
            //HASTA AQUI SE GENERAN LOS BOTONES DE EDITAR Y ELIMINAR
        }
        //HASTA AQUI SE GENERA LA SECCION DE ESTADO Y ACCIONES
        
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }
    
    function registrar(){
        //print_r($_POST);
        //SECCION PARA REGISTRAR LOS CLIENTES
        $codigoservicio=$_POST['codigoservicio'];
        $nombre=$_POST['nombre'];
        $descripcion=$_POST['descripcion'];
        $tiemporapido=$_POST['tiemporapido'];
        $tiempolento=$_POST['tiempolento'];
        $tiempopromedio=$_POST['tiempopromedio'];
        $costoreferencial=$_POST['costoreferencial'];
        $id=$_POST['id'];
        if(empty($codigoservicio) || empty($nombre) || empty($descripcion) || empty($tiemporapido) || empty($tiempolento) || empty($tiempopromedio) || empty($costoreferencial)){
            $msg="Todos los campos son obligatorios";
        }else{
            if($id==""){
                    $data=$this->model->registrarServicio($codigoservicio,$nombre,$descripcion,$tiemporapido,$tiempolento,$tiempopromedio,$costoreferencial);
                    if($data=="ok"){
                        $msg="si";
                    }else if($data=="existe"){
                        $msg="El codigo de Servicio ya existe";
                    }else{
                        $msg="Error al registrar el Servicio";
                    }
            }else{
                $data=$this->model->modificarServicio($codigoservicio,$nombre,$descripcion,$tiemporapido,$tiempolento,$tiempopromedio,$costoreferencial,$id);
                if($data=="modificado"){
                    $msg="modificado";
                }else{
                    $msg="Error al modificar el Servicio";
                }
            }
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();

    }

    public function editar(int $id){
        $data=$this->model->editarServicio($id);
        //print_r($data);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }
    public function eliminar(int $id){
        //print_r($id);
        $data=$this->model->accionServicio(0, $id);
        if($data==1){
            $msg="ok";
        }else{
            $msg="Error al eliminar el Servicio";
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }
    public function reingresar(int $id){
        //print_r($id);
        $data=$this->model->accionServicio(1,$id);
        if($data==1){
            $msg="ok";
        }else{
            $msg="Error al reingresar el Servicio";
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