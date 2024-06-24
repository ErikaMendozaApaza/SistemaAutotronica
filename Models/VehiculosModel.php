<?php
class VehiculosModel extends Query {
    private $ci,$nombres,$apellidopaterno,$apellidomaterno,$direccion,$correo,$telefono,$estado;
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
    public function getVehiculos(){
        $sql="SELECT * FROM vehiculo";
        $data=$this->selectAll($sql);
        return $data;
    }
    public function registrarVehiculo(string $placa,string $tipo,string $marca, int $modelo,string $motor,string $chasis,string $color,int $ci){
        $this->placa=$placa;
        $this->tipo=$tipo;
        $this->marca=$marca;
        $this->modelo=$modelo;
        $this->motor=$motor;
        $this->chasis=$chasis;
        $this->color=$color;
        $this->ci=$ci;
        //ESTA SECCION BUSCA EN LOS REGISTROS SI EXISTE EL VEHICULO
        $verificar ="SELECT * FROM vehiculo WHERE placa_vehiculo='$this->placa'";
        $existe=$this->select($verificar);
        if(empty($existe)){
            $sql="INSERT INTO vehiculo(placa_vehiculo,tipo,marca,modelo,motor,chasis,color,ci_cliente) VALUES (?,?,?,?,?,?,?,?)";
            $datos=array($this->placa,$this->tipo,$this->marca,$this->modelo,$this->motor,$this->chasis,$this->color,$this->ci);
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
    public function editarVehiculo(int $id){
        $sql="SELECT * FROM vehiculo WHERE id=$id";
        $data=$this->select($sql);
        return $data;
    }
    public function modificarVehiculo(string $placa,string $tipo,string $marca,int $modelo,$motor,$chasis,$color,$ci,int $id){
        $this->placa=$placa;
        $this->tipo=$tipo;
        $this->marca=$marca;
        $this->modelo=$modelo;
        $this->motor=$motor;
        $this->chasis=$chasis;
        $this->color=$color;
        $this->ci=$ci;
        $this->id=$id;
        $sql="UPDATE vehiculo SET placa_vehiculo=?,tipo=?,marca=?,modelo=?,motor=?,chasis=?,color=?,ci_cliente=? WHERE id=?";
        $datos = array($this->placa,$this->tipo,$this->marca,$this->modelo,$this->motor,$this->chasis,$this->color,$this->ci, $this->id);
        $data=$this->save($sql,$datos);
            if($data==1){
                $res="modificado";
            }else{
                $res="error";
            }
        return $res;
    }
    public function accionVehiculo(int $estado,int $id){
        $this->id=$id;
        $this->estado=$estado;
        $sql="UPDATE vehiculo SET estado=? WHERE id=?";
        $datos=array($this->estado,$this->id);
        $data=$this->save($sql,$datos);
        return $data;
    }
}
?>