<?php
class Mantenimientos extends Controller{
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
        $data=$this-> model->getMantenimientos();
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
            <button class="btn btn-primary" type="button" onclick="btnEditarMantenimiento('.$data[$i]['id'].');"><i class="fas fa-edit"></i></button>
            <button class="btn btn-danger" type="button" onclick="btnEliminarMantenimiento('.$data[$i]['id'].');"><i class="fas fa-trash-alt"></i></button>
            <button class="btn btn-success" type="button" onclick="btnReingresarMantenimiento('.$data[$i]['id'].');">Reingresar</button>
            </div>';
            //HASTA AQUI SE GENERAN LOS BOTONES DE EDITAR Y ELIMINAR
        }
        //HASTA AQUI SE GENERA LA SECCION DE ESTADO Y ACCIONES
        
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }
    
    function registrar(){
        //print_r($_POST);
        //SECCION PARA REGISTRAR LOS MANTENIMIENTOS

        $codigomantenimiento=$_POST['codigomantenimiento'];
        $codigosucursal=$_POST['codigosucursal'];
        $placavehiculo=$_POST['placavehiculo'];
        $fecharecepcion=$_POST['fecharecepcion'];
        $kilometrajerecibido=$_POST['kilometrajerecibido'];
        $descripcionproblema=$_POST['descripcionproblema'];
        $inventariovehiculo=$_POST['inventariovehiculo'];
        $autorizacionrepuestos=$_POST['autorizacionrepuestos'];
        $id=$_POST['id'];
        if(empty($codigomantenimiento) || empty($codigosucursal) || empty($placavehiculo) || empty($fecharecepcion) || empty($kilometrajerecibido) || empty($descripcionproblema) || empty($inventariovehiculo) || empty($autorizacionrepuestos)){
            $msg="Todos los campos son obligatorios";
        }else{
            if($id==""){
                    $data=$this->model->registrarMantenimiento($codigomantenimiento,$codigosucursal,$placavehiculo,$fecharecepcion,$kilometrajerecibido,$descripcionproblema,$inventariovehiculo,$autorizacionrepuestos);
                    if($data=="ok"){
                        $msg="si";
                    }else if($data=="existe"){
                        $msg="El codigo de Mantenimiento ya existe";
                    }else{
                        $msg="Error al registrar el Mantenimiento";
                    }
            }else{
                $data=$this->model->modificarMantenimiento($codigomantenimiento,$codigosucursal,$placavehiculo,$fecharecepcion,$kilometrajerecibido,$descripcionproblema,$inventariovehiculo,$autorizacionrepuestos,$id);
                if($data=="modificado"){
                    $msg="modificado";
                }else{
                    $msg="Error al modificar el Mantenimiento";
                }
            }
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();

    }

    public function editar(int $id){
        $data=$this->model->editarMantenimiento($id);
        //print_r($data);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }
    public function eliminar(int $id){
        //print_r($id);
        $data=$this->model->accionMantenimiento(0, $id);
        if($data==1){
            $msg="ok";
        }else{
            $msg="Error al eliminar el Mantenimiento";
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }
    public function reingresar(int $id){
        //print_r($id);
        $data=$this->model->accionMantenimiento(1,$id);
        if($data==1){
            $msg="ok";
        }else{
            $msg="Error al reingresar el Mantenimiento";
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