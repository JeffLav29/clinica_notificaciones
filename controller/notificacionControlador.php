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
            
           
            $sub_array[] = $row["idnotificacion"];
            $sub_array[] = $row["medico_id"];
            $sub_array[] = $row["paciente_id"];
            $sub_array[] = $row["motivo"];
            $sub_array[] = $row["mensaje"];
            $sub_array[] = $row["creado_en"];
            $sub_array[] = $row["programado_para"];
            
            
            $sub_array[] = '<button type="button" onclick="editar('. $row["idnotificacion"].');" class="btn btn-warning btn-sm">Editar</button>';
            $sub_array[] = '<button type="button" onclick="eliminar('. $row["idnotificacion"].');" class="btn btn-danger btn-sm">Eliminar</button>';
            
            
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
    
    
    
    case "guardaryeditar":
        if (empty($_POST["medico_id"]) || empty($_POST["paciente_id"]) || empty($_POST["motivo"]) || 
            empty($_POST["mensaje"]) || empty($_POST["creado_en"]) || empty($_POST["programado_para"])) {
            
            echo "error: faltan campos obligatorios";
            exit;
        }

        if (empty($_POST["idnotificacion"])) {
            try {
                $resultado = $notificacion->insert_notificacion(
                    $_POST["medico_id"],
                    $_POST["paciente_id"],
                    $_POST["motivo"],
                    $_POST["mensaje"],
                    $_POST["creado_en"],
                    $_POST["programado_para"]
                );
                
                if ($resultado > 0) {
                    echo "success";
                } else {
                    echo "error: no se pudo insertar la notificación";
                }
            } catch (Exception $e) {
                echo "error: " . $e->getMessage();
            }
        } else {
            
            $datos = $notificacion->get_notificacion_x_id($_POST["idnotificacion"]);
            
            
            if (is_array($datos) && count($datos) > 0) {
                try {
                    $notificacion->update_notificacion(
                        $_POST["idnotificacion"],
                        $_POST["medico_id"],
                        $_POST["paciente_id"],
                        $_POST["motivo"],
                        $_POST["mensaje"],
                        $_POST["creado_en"],
                        $_POST["programado_para"],
                        $_POST["estado"]
                    );
                    echo "success";
                } catch (Exception $e) {
                    
                    echo "error: " . $e->getMessage();
                }
            } else {
                
                echo "error: No se encontró la notificación para actualizar.";
            }
        }
        break;
    
    
    case "eliminar":
        try {
            $notificacion->delete_notificacion($_POST["idnotificacion"]);
            echo "Notificación eliminada correctamente.";
        } catch (Exception $e) {
            
            echo "error: " . $e->getMessage();
        }
        break;

    default:
        echo "Operación no válida.";
        break;
}
?>
