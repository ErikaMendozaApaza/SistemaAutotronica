<?php
class GestionmantenimientosModel extends Query {
    private $codigomantenimiento,$codigorepuesto,$nombrerepuesto,$descripcionrepuesto,$preciorepuesto,$cantidadrepuesto,$subtotalrepuesto,$id;
    public function __construct() {
        parent::__construct();
    }
    public function getMantenimientoCodigo(string $cod)
    {
       // $sql="SELECT * FROM mantenimiento WHERE codigo_mantenimiento='$cod'";
        $sql="SELECT m.id AS 'id',m.codigo_mantenimiento AS 'codigo_mantenimiento',s.nombre AS 'nombre_sucursal',CONCAT(v.placa_vehiculo, ' ',v.tipo, ' ',v.marca, ' ', v.modelo,' ', v.color) AS 'placa_vehiculo',CONCAT(v.ci_cliente, ' ',c.nombres, ' ', c.apellido_paterno, ' ', c.apellido_materno) AS 'carnet_nombre_Propietario' FROM mantenimiento m JOIN vehiculo v ON m.placa_vehiculo = v.placa_vehiculo JOIN cliente c ON v.ci_cliente = c.ci_cliente JOIN sucursal s ON m.codigo_sucursal = s.codigo_sucursal WHERE codigo_mantenimiento='$cod'";

        $data=$this->select($sql);
        return $data;
    }
    
    //**************************** SUB SECCION SERVICIOS     ***************************** */

    public function getServicioCodigo(string $cod){
        $sql="SELECT * FROM servicio WHERE codigo_servicio='$cod'";
        $data=$this->select($sql);
        return $data;
    }

    public function registrarDetalleservicio(string $codigomantenimiento,string $codigoservicio,string $nombreservicio, string $descripcionservicio,int $precioservicio,int $cantidadservicio,string $subtotalservicio){
        $this->codigomantenimiento=$codigomantenimiento;
        $this->codigoservicio=$codigoservicio;
        $this->nombreservicio=$nombreservicio;
        $this->descripcionservicio=$descripcionservicio;
        $this->precioservicio=$precioservicio;
        $this->cantidadservicio=$cantidadservicio;
        $this->subtotalservicio=$subtotalservicio;
        //ESTA SECCION BUSCA EN LOS REGISTROS SI EXISTE EL USUARIO
        //$verificar ="SELECT * FROM mantenimiento WHERE codigo_mantenimiento='$this->codigomantenimiento'";
        //$existe=$this->select($verificar);
        //if(empty($existe)){
            $sql="INSERT INTO detalleservicio(codigo_mantenimiento,codigo_servicio,nombre_servicio,descripcion_servicio,precio_servicio,cantidad_servicio,subtotal_servicio) VALUES (?,?,?,?,?,?,?)";
            $datos=array($this->codigomantenimiento,$this->codigoservicio,$this->nombreservicio,$this->descripcionservicio,$this->precioservicio,$this->cantidadservicio,$this->subtotalservicio);
            $data=$this->save($sql,$datos);
            if($data==1){
                $res="ok";
            }else{
                $res="error";
            }
        //}else{
         //   $res="existe";
        //}
        return $res;
    }

    public function getDetalleservicios(string $cod){
        $sql="SELECT * FROM detalleservicio WHERE codigo_mantenimiento='$cod'";
        $data=$this->selectAll($sql);
        return $data;
    }

    public function calcularTotalServicios(string $cod){
        $sql="SELECT subtotal_servicio,SUM(subtotal_servicio) AS total_servicios FROM detalleservicio WHERE codigo_mantenimiento='$cod'";
        $data=$this->select($sql);
        return $data;
    }
    public function deleteDetalleservicio(int $id){
        $sql="DELETE  FROM detalleservicio WHERE id=?";
        $datos=array($id);
        $data=$this->save($sql,$datos);
        if($data==1){
            $res="ok";
        }else{
            $res="error";
        }
        return $res;
    }



    //**************************** SUB SECCION SERVICIOS     ***************************** */




    //**************************** SUB SECCION REPUESTOS     ***************************** */
    public function getRepuestoCodigo(string $cod){
        $sql="SELECT * FROM repuesto WHERE codigo_repuesto='$cod'";
        $data=$this->select($sql);
        return $data;
    }

    public function registrarDetallerepuesto(string $codigomantenimiento,string $codigorepuesto,string $nombrerepuesto, string $descripcionrepuesto,int $preciorepuesto,int $cantidadrepuesto,string $subtotalrepuesto){
        $this->codigomantenimiento=$codigomantenimiento;
        $this->codigorepuesto=$codigorepuesto;
        $this->nombrerepuesto=$nombrerepuesto;
        $this->descripcionrepuesto=$descripcionrepuesto;
        $this->preciorepuesto=$preciorepuesto;
        $this->cantidadrepuesto=$cantidadrepuesto;
        $this->subtotalrepuesto=$subtotalrepuesto;
        //ESTA SECCION BUSCA EN LOS REGISTROS SI EXISTE EL USUARIO
        //$verificar ="SELECT * FROM mantenimiento WHERE codigo_mantenimiento='$this->codigomantenimiento'";
        //$existe=$this->select($verificar);
        //if(empty($existe)){
            $sql="INSERT INTO detallerepuesto(codigo_mantenimiento,codigo_repuesto,nombre_repuesto,descripcion_repuesto,precio_repuesto,cantidad_repuesto,subtotal_repuesto) VALUES (?,?,?,?,?,?,?)";
            $datos=array($this->codigomantenimiento,$this->codigorepuesto,$this->nombrerepuesto,$this->descripcionrepuesto,$this->preciorepuesto,$this->cantidadrepuesto,$this->subtotalrepuesto);
            $data=$this->save($sql,$datos);
            if($data==1){
                $res="ok";
            }else{
                $res="error";
            }
        //}else{
         //   $res="existe";
        //}
        return $res;
    }

    public function getDetallerepuestos(string $cod){
        $sql="SELECT * FROM detallerepuesto WHERE codigo_mantenimiento='$cod'";
        $data=$this->selectAll($sql);
        return $data;
    }

    public function calcularTotalRepuestos(string $cod){
        $sql="SELECT subtotal_repuesto,SUM(subtotal_repuesto) AS total_repuestos FROM detallerepuesto WHERE codigo_mantenimiento='$cod'";
        $data=$this->select($sql);
        return $data;
    }
    
    public function deleteDetallerepuesto(int $id){
        $sql="DELETE  FROM detallerepuesto WHERE id=?";
        $datos=array($id);
        $data=$this->save($sql,$datos);
        if($data==1){
            $res="ok";
        }else{
            $res="error";
        }
        return $res;
    }


    //**************************** FIN SUB SECCION REPUESTOS     ***************************** */



    
}
?>