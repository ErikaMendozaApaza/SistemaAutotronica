<?php
require_once "Config/Config.php";
$ruta = isset($_GET['url']) ? $_GET['url'] : 'Home/index';
    $array=explode("/",$ruta);
    $controller=$array[0];
    $metodo="index";
    $parametro="";
    if(!empty($array[1])){
        if (!empty($array[1]!="")){
            $metodo=$array[1];
        }
    }
    if(!empty($array[2])){
        if (!empty($array[2]!="")){
            
            for($i=2;$i<count($array);$i++){
                $parametro.=$array[$i]. ",";
            }
            $parametro=trim($parametro,",");
        }
    }
    require_once "Config/App/autoload.php";
    $dirControllers = "Controllers/" . $controller . ".php";
    if (file_exists($dirControllers)) {
        require_once $dirControllers;
        $controller = new $controller();
        if (method_exists($controller, $metodo)) {
            $controller->$metodo($parametro);
        } else {
            echo "No existe el método";
        }
    } else {
        // Mostrar la imagen de error 404 en lugar del mensaje
        http_response_code(404); // Establece el código de respuesta HTTP 404
        include 'Views/404/404.php';
    }
    
?>
