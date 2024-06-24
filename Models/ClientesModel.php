<?php
class ClientesModel extends Query {
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
    public function getClientes(){
        $sql="SELECT * FROM cliente";
        $data=$this->selectAll($sql);
        return $data;
    }
    public function registrarCliente(int $ci,string $nombres,string $apellidopaterno, string $apellidomaterno,string $direccion,string $correo,string $telefono){
        $this->ci=$ci;
        $this->nombres=$nombres;
        $this->apellidopaterno=$apellidopaterno;
        $this->apellidomaterno=$apellidomaterno;
        $this->direccion=$direccion;
        $this->correo=$correo;
        $this->telefono=$telefono;
        //ESTA SECCION BUSCA EN LOS REGISTROS SI EXISTE EL USUARIO
        $verificar ="SELECT * FROM cliente WHERE ci_cliente='$this->ci'";
        $existe=$this->select($verificar);
        if(empty($existe)){
            $sql="INSERT INTO cliente(ci_cliente,nombres,apellido_paterno,apellido_materno,direccion,correo,telefono) VALUES (?,?,?,?,?,?,?)";
            $datos=array($this->ci,$this->nombres,$this->apellidopaterno,$this->apellidomaterno,$this->direccion,$this->correo,$this->telefono);
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
    public function editarCliente(int $id){
        $sql="SELECT * FROM cliente WHERE id=$id";
        $data=$this->select($sql);
        return $data;
    }
    public function modificarCliente(int $ci,string $nombres,string $apellidopaterno, string $apellidomaterno,string $direccion,string $correo,string $telefono,int $id){
        $this->ci=$ci;
        $this->nombres=$nombres;
        $this->apellidopaterno=$apellidopaterno;
        $this->apellidomaterno=$apellidomaterno;
        $this->direccion=$direccion;
        $this->correo=$correo;
        $this->telefono=$telefono;
        $this->id=$id;
        $sql="UPDATE cliente SET ci_cliente=?,nombres=?,apellido_paterno=?,apellido_materno=?,direccion=?,correo=?,telefono=? WHERE id=?";
        $datos = array($this->ci, $this->nombres, $this->apellidopaterno, $this->apellidomaterno, $this->direccion, $this->correo, $this->telefono, $this->id);
        $data=$this->save($sql,$datos);
            if($data==1){
                $res="modificado";
            }else{
                $res="error";
            }
        return $res;
    }
    public function accionCliente(int $estado,int $id){
        $this->id=$id;
        $this->estado=$estado;
        $sql="UPDATE cliente SET estado=? WHERE id=?";
        $datos=array($this->estado,$this->id);
        $data=$this->save($sql,$datos);
        return $data;
    }
}
?>