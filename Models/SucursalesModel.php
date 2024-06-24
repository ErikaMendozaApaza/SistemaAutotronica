<?php
class SucursalesModel extends Query {
    private string $codigosucursal,$nombre,$direccion,$id,$estado;
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
    public function getSucursales(){
        $sql="SELECT * FROM sucursal";
        $data=$this->selectAll($sql);
        return $data;
    }
    public function registrarSucursal(string $codigosucursal,string $nombre,string $direccion){
        $this->codigosucursal=$codigosucursal;
        $this->nombre=$nombre;
        $this->direccion=$direccion;
        //ESTA SECCION BUSCA EN LOS REGISTROS SI EXISTE LA SUCURSAL
        $verificar ="SELECT * FROM sucursal WHERE codigo_sucursal='$this->codigosucursal'";
        $existe=$this->select($verificar);
        if(empty($existe)){
            $sql="INSERT INTO sucursal(codigo_sucursal,nombre,direccion) VALUES (?,?,?)";
            $datos=array($this->codigosucursal,$this->nombre,$this->direccion);
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
    public function editarSucursal(int $id){
        $sql="SELECT * FROM sucursal WHERE id=$id";
        $data=$this->select($sql);
        return $data;
    }
    public function modificarSucursal(string $codigosucursal,string $nombre,string $direccion,int $id){
        $this->codigosucursal=$codigosucursal;
        $this->nombre=$nombre;
        $this->direccion=$direccion;
        $this->id=$id;
        $sql="UPDATE sucursal SET codigo_sucursal=?,nombre=?,direccion=? WHERE id=?";
        $datos = array($this->codigosucursal,$this->nombre,$this->direccion,$this->id);
        $data=$this->save($sql,$datos);
            if($data==1){
                $res="modificado";
            }else{
                $res="error";
            }
        return $res;
    }
    public function accionSucursal(int $estado,int $id){
        $this->id=$id;
        $this->estado=$estado;
        $sql="UPDATE sucursal SET estado=? WHERE id=?";
        $datos=array($this->estado,$this->id);
        $data=$this->save($sql,$datos);
        return $data;
    }
}
?>