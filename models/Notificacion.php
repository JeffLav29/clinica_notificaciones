<?php

class Notificacion extends Conectar {

    // Obtener todas las notificaciones
    public function get_notificacion() {
        $conectar = parent::Conexion();
        parent::set_names();

        $sql = "SELECT motivo, mensaje, creado_en, programado_para FROM notificacion";
        $sql = $conectar->prepare($sql);
        $sql->execute();

        return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    //Obtener una notificacion en especifico
    public function get_notificacion_x_id($idnotificacion) {
        $conectar = parent::Conexion();
        parent::set_names();

        $sql = "SELECT * FROM notificacion WHERE idnotificacion = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $idnotificacion);
        $sql->execute();

        return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
    }



    // Crear una nueva notificación
    public function insert_notificacion($medico_id, $paciente_id, $motivo, $mensaje, $creado_en, $programado_para) {
        $conectar = parent::Conexion();
        parent::set_names();
    
        $sql = "INSERT INTO notificacion (medico_id, paciente_id, motivo, mensaje, creado_en, programado_para) 
                VALUES (?, ?, ?, ?, ?, ?)";
        
        $sql = $conectar->prepare($sql);
        
        // Bind the values to the query
        $sql->bindValue(1, $medico_id);
        $sql->bindValue(2, $paciente_id);
        $sql->bindValue(3, $motivo);
        $sql->bindValue(4, $mensaje);
        $sql->bindValue(5, $creado_en);
        $sql->bindValue(6, $programado_para);
        
        $sql->execute();
    
        return $sql->rowCount();
    }

    // Actualizar una notificación
    public function update_notificacion($idnotificacion, $medico_id, $paciente_id, $motivo, $mensaje, $creado_en, $programado_para, $estado) {
        $conectar = parent::Conexion();
        parent::set_names();
    
        // Actualizar las columnas correctas en la tabla
        $sql = "UPDATE notificacion SET 
                medico_id = ?, 
                paciente_id = ?, 
                motivo = ?, 
                mensaje = ?, 
                creado_en = ?, 
                programado_para = ?, 
                estado = ? 
                WHERE idnotificacion = ?";
        
        $sql = $conectar->prepare($sql);
        
        // Vincular los valores a la consulta
        $sql->bindValue(1, $medico_id);
        $sql->bindValue(2, $paciente_id);
        $sql->bindValue(3, $motivo);
        $sql->bindValue(4, $mensaje);
        $sql->bindValue(5, $creado_en);
        $sql->bindValue(6, $programado_para);
        $sql->bindValue(7, $estado);
        $sql->bindValue(8, $idnotificacion);
        
        $sql->execute();
    
        return $sql->rowCount();
    }
    

    // Eliminar una notificación
    public function delete_notificacion($idnotificacion) {
        $conectar = parent::Conexion();
        parent::set_names();
    
        $sql = "DELETE FROM notificacion WHERE idnotificacion = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $idnotificacion);
        $sql->execute();
    
        return $sql->rowCount();
    }
    
}

?>
