<?php

require_once("../config/conexion.php");
require_once("../models/Notificacion.php");

$notificacion = new Notificacion();

switch($_GET["op"]){
    case 'login':
        $datos = $usuario->login_usuario($_POST["usuario"],$_POST["contra"]);
        if(is_array($datos)==true and count($datos)>0){
            echo "1";
        }else{
            echo "0";
        }
        break;

    default:
        echo "Operacion no autorizada";
        break;
}

?>