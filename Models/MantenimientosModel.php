<?php
class MantenimientosModel extends Query {
    private $codigomantenimiento,$codigosucursal,$placavehiculo,$fecharecepcion,$kilometrajerecibido,$descripcionproblema,$inventariovehiculo,$autorizacionrepuestos,$id,$estado;
    public function __construct() {
        parent::__construct();
    }
/*     public function getUsuario(string $usuario,string $clave){
        //public function getUsuario(){
        //$sql="SELECT * FROM usuarios";
        $sql="SELECT * FROM usuarios WHERE usuario='$usuario' AND clave='$clave'";
        $data=$this->select($sql);
        return $data;
    }
    public function getCajas(){
        $sql="SELECT * FROM caja WHERE estado=1";
        $data=$this->selectAll($sql);
        return $data;
    } */
     public function getMantenimientos(){
        $sql="SELECT * FROM mantenimiento";
        $data=$this->selectAll($sql);
        return $data;
    }
    public function registrarMantenimiento(string $codigomantenimiento,string $codigosucursal,string $placavehiculo, string $fecharecepcion,string $kilometrajerecibido,string $descripcionproblema,string $inventariovehiculo,string $autorizacionrepuestos){
        $this->codigomantenimiento=$codigomantenimiento;
        $this->codigosucursal=$codigosucursal;
        $this->placavehiculo=$placavehiculo;
        $this->fecharecepcion=$fecharecepcion;
        $this->kilometrajerecibido=$kilometrajerecibido;
        $this->descripcionproblema=$descripcionproblema;
        $this->inventariovehiculo=$inventariovehiculo;
        $this->autorizacionrepuestos=$autorizacionrepuestos;
        //ESTA SECCION BUSCA EN LOS REGISTROS SI EXISTE EL USUARIO
        $verificar ="SELECT * FROM mantenimiento WHERE codigo_mantenimiento='$this->codigomantenimiento'";
        $existe=$this->select($verificar);
        if(empty($existe)){
            $sql="INSERT INTO mantenimiento(codigo_mantenimiento,codigo_sucursal,placa_vehiculo,fecha_recepcion,kilometraje_recibido,descripcion_problema,inventario_vehiculo,autorizacion_repuestos) VALUES (?,?,?,?,?,?,?,?)";
            $datos=array($this->codigomantenimiento,$this->codigosucursal,$this->placavehiculo,$this->fecharecepcion,$this->kilometrajerecibido,$this->descripcionproblema,$this->inventariovehiculo,$this->autorizacionrepuestos);
            $data=$this->save($sql,$datos);
            if($data==1){
                $res="ok";
            }else{
                $res="error";
            }
        }else{
            $res="existe";
        }
        return $res;
    }
    public function editarMantenimiento(int $id){
        $sql="SELECT * FROM mantenimiento WHERE id=$id";
        $data=$this->select($sql);
        return $data;
    }
    public function modificarMantenimiento(string $codigomantenimiento,string $codigosucursal,string $placavehiculo, string $fecharecepcion,string $kilometrajerecibido,string $descripcionproblema,string $inventariovehiculo,string $autorizacionrepuestos,int $id){
        $this->codigomantenimiento=$codigomantenimiento;
        $this->codigosucursal=$codigosucursal;
        $this->placavehiculo=$placavehiculo;
        $this->fecharecepcion=$fecharecepcion;
        $this->kilometrajerecibido=$kilometrajerecibido;
        $this->descripcionproblema=$descripcionproblema;
        $this->inventariovehiculo=$inventariovehiculo;
        $this->autorizacionrepuestos=$autorizacionrepuestos;
        $this->id=$id;
        $sql="UPDATE mantenimiento SET codigo_mantenimiento=?,codigo_sucursal=?,placa_vehiculo=?,fecha_recepcion=?,kilometraje_recibido=?,descripcion_problema=?,inventario_vehiculo=?,autorizacion_repuestos=? WHERE id=?";
        $datos = array($this->codigomantenimiento,$this->codigosucursal,$this->placavehiculo,$this->fecharecepcion,$this->kilometrajerecibido,$this->descripcionproblema,$this->inventariovehiculo,$this->autorizacionrepuestos,$this->id);
        $data=$this->save($sql,$datos);
            if($data==1){
                $res="modificado";
            }else{
                $res="error";
            }
        return $res;
    }
    public function accionMantenimiento(int $estado,int $id){
        $this->id=$id;
        $this->estado=$estado;
        $sql="UPDATE mantenimiento SET estado=? WHERE id=?";
        $datos=array($this->estado,$this->id);
        $data=$this->save($sql,$datos);
        return $data;
    } 
}
?>