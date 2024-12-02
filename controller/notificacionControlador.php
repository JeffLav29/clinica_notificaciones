<?php
require_once("../config/conexion.php");
require_once("../models/Notificacion.php");

$notificacion = new Notificacion();

switch ($_GET["op"]) {

    // Listar notificaciones
    case "listar":
        $datos = $notificacion->get_notificacion();
        $data = array();
    
        foreach ($datos as $row) {
            $sub_array = array();
            $sub_array[] = $row["motivo"];
            $sub_array[] = $row["mensaje"];
            $sub_array[] = $row["creado_en"];
            $sub_array[] = $row["programado_para"];
            $sub_array[] = '<button type="button" onclick="editar(' . $row["idnotificacion"] . ')" class="btn btn-warning btn-sm">Editar</button>';
            $sub_array[] = '<button type="button" onclick="eliminar(' . $row["idnotificacion"] . ')" class="btn btn-danger btn-sm">Eliminar</button>';
            $data[] = $sub_array;
        }
    
        $result = array(
            "sEcho" => 1, 
            "iTotalRecords" => count($data),
            "iTotalDisplayRecords" => count($data),
            "aaData" => $data 
        );
        echo json_encode($result);
        break;

    // Actualizar una notificación existente
    case "actualizar":
        $notificacion->update_notificacion(
            $_POST["idnotificacion"],
            $_POST["medico_id"],
            $_POST["paciente_id"],
            $_POST["motivo"],
            $_POST["mensaje"],
            $_POST["creado_en"],
            $_POST["programado_para"],
            $_POST["leido"]
        );
        echo "Notificación actualizada correctamente.";
        break;

    // Eliminar una notificación
    case "eliminar":
        $notificacion->delete_notificacion($_POST["idnotificacion"]);
        echo "Notificación eliminada correctamente.";
        break;

    default:
        echo "Operación no válida.";
        break;
}
?>
