<?php
class Vehiculos extends Controller{
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
        $data=$this-> model->getVehiculos();
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
            <button class="btn btn-primary" type="button" onclick="btnEditarVehiculo('.$data[$i]['id'].');"><i class="fas fa-edit"></i></button>
            <button class="btn btn-danger" type="button" onclick="btnEliminarVehiculo('.$data[$i]['id'].');"><i class="fas fa-trash-alt"></i></button>
            <button class="btn btn-success" type="button" onclick="btnReingresarVehiculo('.$data[$i]['id'].');">Reingresar</button>
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
        $placa=$_POST['placa'];
        $tipo=$_POST['tipo'];
        $marca=$_POST['marca'];
        $modelo=$_POST['modelo'];
        $motor=$_POST['motor'];
        $chasis=$_POST['chasis'];
        $color=$_POST['color'];
        $ci=$_POST['ci'];
        $id=$_POST['id'];
        if(empty($placa) || empty($tipo) || empty($marca) || empty($modelo) || empty($motor) || empty($chasis) || empty($color)){
            $msg="Todos los campos son obligatorios";
        }else{
            if($id==""){
                    $data=$this->model->registrarVehiculo($placa,$tipo,$marca,$modelo,$motor,$chasis,$color,$ci);
                    if($data=="ok"){
                        $msg="si";
                    }else if($data=="existe"){
                        $msg="El Vehiculo ya existe";
                    }else{
                        $msg="Error al registrar el Vehiculo";
                    }
            }else{
                $data=$this->model->modificarVehiculo($placa,$tipo,$marca,$modelo,$motor,$chasis,$color,$ci,$id);
                if($data=="modificado"){
                    $msg="modificado";
                }else{
                    $msg="Error al modificar el Vehiculo";
                }
            }
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();

    }

    public function editar(int $id){
        $data=$this->model->editarVehiculo($id);
        //print_r($data);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }
    public function eliminar(int $id){
        //print_r($id);
        $data=$this->model->accionVehiculo(0, $id);
        if($data==1){
            $msg="ok";
        }else{
            $msg="Error al eliminar el Vehiculo";
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }
    public function reingresar(int $id){
        //print_r($id);
        $data=$this->model->accionVehiculo(1,$id);
        if($data==1){
            $msg="ok";
        }else{
            $msg="Error al reingresar el Cliente";
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