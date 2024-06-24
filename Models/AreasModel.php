<?php
class AreasModel extends Query {
    private string $codigoarea,$nombre,$descripcion,$id,$estado;
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
    public function getAreas(){
        $sql="SELECT * FROM area";
        $data=$this->selectAll($sql);
        return $data;
    }
    public function registrarArea(string $codigoarea,string $nombre,string $descripcion){
        $this->codigoarea=$codigoarea;
        $this->nombre=$nombre;
        $this->descripcion=$descripcion;
        //ESTA SECCION BUSCA EN LOS REGISTROS SI EXISTE EL AREA
        $verificar ="SELECT * FROM area WHERE codigo_area='$this->codigoarea'";
        $existe=$this->select($verificar);
        if(empty($existe)){
            $sql="INSERT INTO area(codigo_area,nombre,descripcion) VALUES (?,?,?)";
            $datos=array($this->codigoarea,$this->nombre,$this->descripcion);
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
    public function editarArea(int $id){
        $sql="SELECT * FROM area WHERE id=$id";
        $data=$this->select($sql);
        return $data;
    }
    public function modificarArea(string $codigoarea,string $nombre,string $descripcion,int $id){
        $this->codigoarea=$codigoarea;
        $this->nombre=$nombre;
        $this->descripcion=$descripcion;
        $this->id=$id;
        $sql="UPDATE area SET codigo_area=?,nombre=?,descripcion=? WHERE id=?";
        $datos = array($this->codigoarea,$this->nombre,$this->descripcion,$this->id);
        $data=$this->save($sql,$datos);
            if($data==1){
                $res="modificado";
            }else{
                $res="error";
            }
        return $res;
    }
    public function accionArea(int $estado,int $id){
        $this->id=$id;
        $this->estado=$estado;
        $sql="UPDATE area SET estado=? WHERE id=?";
        $datos=array($this->estado,$this->id);
        $data=$this->save($sql,$datos);
        return $data;
    }
}
?>