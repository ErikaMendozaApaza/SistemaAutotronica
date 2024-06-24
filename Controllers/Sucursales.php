<?php
class Sucursales extends Controller{
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
        $data=$this-> model->getSucursales();
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
            <button class="btn btn-primary" type="button" onclick="btnEditarSucursal('.$data[$i]['id'].');"><i class="fas fa-edit"></i></button>
            <button class="btn btn-danger" type="button" onclick="btnEliminarSucursal('.$data[$i]['id'].');"><i class="fas fa-trash-alt"></i></button>
            <button class="btn btn-success" type="button" onclick="btnReingresarSucursal('.$data[$i]['id'].');">Reingresar</button>
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
        $codigosucursal=$_POST['codigosucursal'];
        $nombre=$_POST['nombre'];
        $direccion=$_POST['direccion'];
        $id=$_POST['id'];
        if(empty($codigosucursal) || empty($nombre) || empty($direccion) ){
            $msg="Todos los campos son obligatorios";
        }else{
            if($id==""){
                    $data=$this->model->registrarSucursal($codigosucursal,$nombre,$direccion);
                    if($data=="ok"){
                        $msg="si";
                    }else if($data=="existe"){
                        $msg="El codigo de Sucursal ya existe";
                    }else{
                        $msg="Error al registrar la Sucursal";
                    }
            }else{
                $data=$this->model->modificarSucursal($codigosucursal,$nombre,$direccion,$id);
                if($data=="modificado"){
                    $msg="modificado";
                }else{
                    $msg="Error al modificar la Sucursal";
                }
            }
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();

    }

    public function editar(int $id){
        $data=$this->model->editarSucursal($id);
        //print_r($data);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }
    public function eliminar(int $id){
        //print_r($id);
        $data=$this->model->accionSucursal(0, $id);
        if($data==1){
            $msg="ok";
        }else{
            $msg="Error al eliminar la Sucursal";
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }
    public function reingresar(int $id){
        //print_r($id);
        $data=$this->model->accionSucursal(1,$id);
        if($data==1){
            $msg="ok";
        }else{
            $msg="Error al reingresar la Sucursal";
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