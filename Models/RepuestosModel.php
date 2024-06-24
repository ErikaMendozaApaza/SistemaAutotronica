<?php
class RepuestosModel extends Query {
    private string $codigorepuesto,$nombre,$descripcion,$costocompra,$precioventa,$codigocategoria,$cantidad,$id,$estado;
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
    public function getRepuestos(){
        $sql="SELECT * FROM repuesto";
        $data=$this->selectAll($sql);
        return $data;
    }
    public function registrarRepuesto(string $codigorepuesto,string $nombre,string $descripcion, int $costocompra,int $precioventa,string $codigocategoria,int $cantidad){
        $this->codigorepuesto=$codigorepuesto;
        $this->nombre=$nombre;
        $this->descripcion=$descripcion;
        $this->costocompra=$costocompra;
        $this->precioventa=$precioventa;
        $this->codigocategoria=$codigocategoria;
        $this->cantidad=$cantidad;
        //ESTA SECCION BUSCA EN LOS REGISTROS SI EXISTE EL REPUESTO
        $verificar ="SELECT * FROM repuesto WHERE codigo_repuesto='$this->codigorepuesto'";
        $existe=$this->select($verificar);
        if(empty($existe)){
            $sql="INSERT INTO repuesto(codigo_repuesto,nombre,descripcion,costo_compra,precio_venta,codigo_categoria,cantidad) VALUES (?,?,?,?,?,?,?)";
            $datos=array($this->codigorepuesto,$this->nombre,$this->descripcion,$this->costocompra,$this->precioventa,$this->codigocategoria,$this->cantidad);
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
    public function editarRepuesto(int $id){
        $sql="SELECT * FROM repuesto WHERE id=$id";
        $data=$this->select($sql);
        return $data;
    }
    public function modificarRepuesto(string $codigorepuesto,string $nombre,string $descripcion, int $costocompra,int $precioventa,string $codigocategoria,int $cantidad,int $id){
        $this->codigorepuesto=$codigorepuesto;
        $this->nombre=$nombre;
        $this->descripcion=$descripcion;
        $this->costocompra=$costocompra;
        $this->precioventa=$precioventa;
        $this->codigocategoria=$codigocategoria;
        $this->cantidad=$cantidad;
        $this->id=$id;
        $sql="UPDATE repuesto SET codigo_repuesto=?,nombre=?,descripcion=?,costo_compra=?,precio_venta=?,codigo_categoria=?,cantidad=? WHERE id=?";
        $datos = array($this->codigorepuesto,$this->nombre,$this->descripcion,$this->costocompra,$this->precioventa,$this->codigocategoria,$this->cantidad, $this->id);
        $data=$this->save($sql,$datos);
            if($data==1){
                $res="modificado";
            }else{
                $res="error";
            }
        return $res;
    }
    public function accionRepuesto(int $estado,int $id){
        $this->id=$id;
        $this->estado=$estado;
        $sql="UPDATE repuesto SET estado=? WHERE id=?";
        $datos=array($this->estado,$this->id);
        $data=$this->save($sql,$datos);
        return $data;
    }
}
?>