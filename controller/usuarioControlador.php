<?php

require_once("../config/conexion.php");
require_once("../models/Usuario.php");

$usuario = new Usuario();

switch($_GET["op"]){
    case 'login':
        $datos = $usuario->login_usuario($_POST["usuario"],$_POST["contraseña"]);
        break;
}

?>