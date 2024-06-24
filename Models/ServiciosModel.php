<?php
class ServiciosModel extends Query {
    private string $codigoservicio,$nombre,$descripcion,$tiemporapido,$tiempolento,$tiempopromedio,$costoreferencial,$id,$estado;
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
    public function getServicios(){
        $sql="SELECT * FROM servicio";
        $data=$this->selectAll($sql);
        return $data;
    }
    public function registrarServicio(string $codigoservicio,string $nombre,string $descripcion, int $tiemporapido,int $tiempolento,int $tiempopromedio,int $costoreferencial){
        $this->codigoservicio=$codigoservicio;
        $this->nombre=$nombre;
        $this->descripcion=$descripcion;
        $this->tiemporapido=$tiemporapido;
        $this->tiempolento=$tiempolento;
        $this->tiempopromedio=$tiempopromedio;
        $this->costoreferencial=$costoreferencial;
        //ESTA SECCION BUSCA EN LOS REGISTROS SI EXISTE EL SERVICIO
        $verificar ="SELECT * FROM servicio WHERE codigo_servicio='$this->codigoservicio'";
        $existe=$this->select($verificar);
        if(empty($existe)){
            $sql="INSERT INTO servicio(codigo_servicio,nombre,descripcion,tiempo_rapido,tiempo_lento,tiempo_promedio,costo_referencial) VALUES (?,?,?,?,?,?,?)";
            $datos=array($this->codigoservicio,$this->nombre,$this->descripcion,$this->tiemporapido,$this->tiempolento,$this->tiempopromedio,$this->costoreferencial);
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
    public function editarServicio(int $id){
        $sql="SELECT * FROM servicio WHERE id=$id";
        $data=$this->select($sql);
        return $data;
    }
    public function modificarServicio(string $codigoservicio,string $nombre,string $descripcion, int $tiemporapido,int $tiempolento,int $tiempopromedio,int $costoreferencial,int $id){
        $this->codigoservicio=$codigoservicio;
        $this->nombre=$nombre;
        $this->descripcion=$descripcion;
        $this->tiemporapido=$tiemporapido;
        $this->tiempolento=$tiempolento;
        $this->tiempopromedio=$tiempopromedio;
        $this->costoreferencial=$costoreferencial;
        $this->id=$id;
        $sql="UPDATE servicio SET codigo_servicio=?,nombre=?,descripcion=?,tiempo_rapido=?,tiempo_lento=?,tiempo_promedio=?,costo_referencial=? WHERE id=?";
        $datos = array($this->codigoservicio,$this->nombre,$this->descripcion,$this->tiemporapido,$this->tiempolento,$this->tiempopromedio,$this->costoreferencial, $this->id);
        $data=$this->save($sql,$datos);
            if($data==1){
                $res="modificado";
            }else{
                $res="error";
            }
        return $res;
    }
    public function accionServicio(int $estado,int $id){
        $this->id=$id;
        $this->estado=$estado;
        $sql="UPDATE servicio SET estado=? WHERE id=?";
        $datos=array($this->estado,$this->id);
        $data=$this->save($sql,$datos);
        return $data;
    }
}
?>