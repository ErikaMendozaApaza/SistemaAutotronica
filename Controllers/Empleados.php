<?php
class Empleados extends Controller{
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
        $data=$this-> model->getEmpleados();
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
            <button class="btn btn-primary" type="button" onclick="btnEditarEmpleado('.$data[$i]['id'].');"><i class="fas fa-edit"></i></button>
            <button class="btn btn-danger" type="button" onclick="btnEliminarEmpleado('.$data[$i]['id'].');"><i class="fas fa-trash-alt"></i></button>
            <button class="btn btn-success" type="button" onclick="btnReingresarEmpleado('.$data[$i]['id'].');">Reingresar</button>
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
        $codigoempleado=$_POST['codigoempleado'];
        $nombre=$_POST['nombre'];
        $profesion=$_POST['profesion'];
        $cargo=$_POST['cargo'];
        $id=$_POST['id'];
        if(empty($codigoempleado) || empty($nombre) || empty($profesion) || empty($cargo) ){
            $msg="Todos los campos son obligatorios";
        }else{
            if($id==""){
                    $data=$this->model->registrarEmpleado($codigoempleado,$nombre,$profesion,$cargo);
                    if($data=="ok"){
                        $msg="si";
                    }else if($data=="existe"){
                        $msg="El codigo de Empleado ya existe";
                    }else{
                        $msg="Error al registrar la Empleado";
                    }
            }else{
                $data=$this->model->modificarEmpleado($codigoempleado,$nombre,$profesion,$cargo,$id);
                if($data=="modificado"){
                    $msg="modificado";
                }else{
                    $msg="Error al modificar la Empleado";
                }
            }
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();

    }

    public function editar(int $id){
        $data=$this->model->editarEmpleado($id);
        //print_r($data);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }
    public function eliminar(int $id){
        //print_r($id);
        $data=$this->model->accionEmpleado(0, $id);
        if($data==1){
            $msg="ok";
        }else{
            $msg="Error al eliminar la Empleado";
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }
    public function reingresar(int $id){
        //print_r($id);
        $data=$this->model->accionEmpleado(1,$id);
        if($data==1){
            $msg="ok";
        }else{
            $msg="Error al reingresar la Empleado";
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