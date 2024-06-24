<?php
class Gestionmantenimientos extends Controller{
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

    function buscarCodigomantenimiento($cod){
        //print_r($cod);
        $data=$this->model->getMantenimientoCodigo($cod);
        //print_r($data);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }







    // ********************************************SUBSECCION SERVICIOS********************************************







    // ********************************************SUBSECCION SERVICIOS********************************************

    function buscarCodigoservicio($cod){
        //print_r($cod);
        $data=$this->model->getServicioCodigo($cod);
        //print_r($data);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }
    
    public function listarServicios(){
        //print_r($this-> model->getUsuarios());
        //print_r($_POST['codigomantenimientoh']);
        $codigomantenimiento=$_POST['codigomantenimientoh'];
        $data['detalleservicios']=$this-> model->getDetalleservicios($codigomantenimiento);
        $data['totalservicios']=$this-> model->calcularTotalServicios($codigomantenimiento);

        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();  
        //SECCION DE ESTADO Y ACCIONES
        /* for($i=0;$i<count($data);$i++){
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
        die(); */
    }
    
    function registrarServicio(){
        //print_r($_POST);
        //SECCION PARA REGISTRAR LOS MANTENIMIENTOS

        $codigomantenimiento=$_POST['codigomantenimiento2h'];
        $codigoservicio=$_POST['codigoservicioh'];
        $nombreservicio=$_POST['nombreservicioh'];
        $descripcionservicio=$_POST['descripcionservicioh'];
        $precioservicio=$_POST['precioservicioh'];
        $cantidadservicio=$_POST['cantidadservicio'];
        $subtotalservicio=$_POST['subtotalservicioh'];
        $id=$_POST['id'];
        if(empty($codigomantenimiento) || empty($codigoservicio) || empty($cantidadservicio) ){
            $msg="Todos los campos son obligatorios";
        }else{
            if($id==""){
                    $data=$this->model->registrarDetalleservicio($codigomantenimiento,$codigoservicio,$nombreservicio,$descripcionservicio,$precioservicio,$cantidadservicio,$subtotalservicio);
                    if($data=="ok"){
                        $msg="si";
                    }else if($data=="existe"){
                        $msg="El codigo de Detalle s ya existe";
                    }else{
                        $msg="Error al registrar el Detalle s";
                    }
            }else{
                $data=$this->model->modificarDetalleservicio($codigomantenimiento,$codigoservicio,$nombreservicio,$descripcionservicio,$precioservicio,$cantidadservicio,$subtotalservicio,$id);
                if($data=="modificado"){
                    $msg="modificado";
                }else{
                    $msg="Error al modificar el Detalle s";
                }
            }
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die(); 

    }

    function eliminarServicio($id){
        //print_r($id);
        $data=$this->model->deleteDetalleservicio($id);
        if($data=="ok"){
            $msg="ok";
        }else{
            $msg="error";
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }


    




    // ********************************************SUBSECCION REPUESTOS********************************************

    function buscarCodigorepuesto($cod){
        //print_r($cod);
        $data=$this->model->getRepuestoCodigo($cod);
        //print_r($data);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }
    
    public function listarRepuestos(){
        //print_r($this-> model->getUsuarios());
        //print_r($_POST['codigomantenimientoh']);
      $codigomantenimiento=$_POST['codigomantenimientoh'];
      $data['detallerepuestos']=$this-> model->getDetallerepuestos($codigomantenimiento);
      $data['totalrepuestos']=$this-> model->calcularTotalRepuestos($codigomantenimiento);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();  
        //SECCION DE ESTADO Y ACCIONES
        /* for($i=0;$i<count($data);$i++){
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
        die(); */
    }
    
    function registrarRepuesto(){
        //print_r($_POST);
        //SECCION PARA REGISTRAR LOS MANTENIMIENTOS

        $codigomantenimiento=$_POST['codigomantenimiento3h'];
        $codigorepuesto=$_POST['codigorepuestoh'];
        $nombrerepuesto=$_POST['nombrerepuestoh'];
        $descripcionrepuesto=$_POST['descripcionrepuestoh'];
        $preciorepuesto=$_POST['preciorepuestoh'];
        $cantidadrepuesto=$_POST['cantidadrepuesto'];
        $subtotalrepuesto=$_POST['subtotalrepuestoh'];
        $id=$_POST['id'];
        if(empty($codigomantenimiento) || empty($codigorepuesto) || empty($cantidadrepuesto) ){
            $msg="Todos los campos son obligatorios";
        }else{
            if($id==""){
                    $data=$this->model->registrarDetallerepuesto($codigomantenimiento,$codigorepuesto,$nombrerepuesto,$descripcionrepuesto,$preciorepuesto,$cantidadrepuesto,$subtotalrepuesto);
                    if($data=="ok"){
                        $msg="si";
                    }else if($data=="existe"){
                        $msg="El codigo de Detalle ya existe";
                    }else{
                        $msg="Error al registrar el Detalle";
                    }
            }else{
                $data=$this->model->modificarDetallerepuesto($codigomantenimiento,$codigorepuesto,$nombrerepuesto,$descripcionrepuesto,$preciorepuesto,$cantidadrepuesto,$subtotalrepuesto,$id);
                if($data=="modificado"){
                    $msg="modificado";
                }else{
                    $msg="Error al modificar el Detalle";
                }
            }
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die(); 

    }
    function eliminarRepuesto($id){
        //print_r($id);
        $data=$this->model->deleteDetallerepuesto($id);
        if($data=="ok"){
            $msg="ok";
        }else{
            $msg="error";
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }
    /*public function editar(int $id){
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
 */

    // ******************************************** FIN SUBSECCION REPUESTOS********************************************





}
?>