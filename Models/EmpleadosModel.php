<?php
class EmpleadosModel extends Query {
    private string $codigoempleado,$nombre,$profesion,$cargo,$id,$estado;
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
    public function getEmpleados(){
        $sql="SELECT * FROM empleado";
        $data=$this->selectAll($sql);
        return $data;
    }
    public function registrarEmpleado(string $codigoempleado,string $nombre,string $profesion,string $cargo){
        $this->codigoempleado=$codigoempleado;
        $this->nombre=$nombre;
        $this->profesion=$profesion;
        $this->cargo=$cargo;
        //ESTA SECCION BUSCA EN LOS REGISTROS SI EXISTE LA SUCURSAL
        $verificar ="SELECT * FROM empleado WHERE codigo_empleado='$this->codigoempleado'";
        $existe=$this->select($verificar);
        if(empty($existe)){
            $sql="INSERT INTO empleado(codigo_empleado,nombre,profesion,cargo) VALUES (?,?,?,?)";
            $datos=array($this->codigoempleado,$this->nombre,$this->profesion,$this->cargo);
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
    public function editarEmpleado(int $id){
        $sql="SELECT * FROM empleado WHERE id=$id";
        $data=$this->select($sql);
        return $data;
    }
    public function modificarEmpleado(string $codigoempleado,string $nombre,string $profesion,string $cargo,int $id){
        $this->codigoempleado=$codigoempleado;
        $this->nombre=$nombre;
        $this->profesion=$profesion;
        $this->cargo=$cargo;
        $this->id=$id;
        $sql="UPDATE empleado SET codigo_empleado=?,nombre=?,profesion=?,cargo=? WHERE id=?";
        $datos = array($this->codigoempleado,$this->nombre,$this->profesion,$this->cargo,$this->id);
        $data=$this->save($sql,$datos);
            if($data==1){
                $res="modificado";
            }else{
                $res="error";
            }
        return $res;
    }
    public function accionEmpleado(int $estado,int $id){
        $this->id=$id;
        $this->estado=$estado;
        $sql="UPDATE empleado SET estado=? WHERE id=?";
        $datos=array($this->estado,$this->id);
        $data=$this->save($sql,$datos);
        return $data;
    }
}
?>