<?php

class Notificacion extends Conectar {

    // Crear una nueva notificación
    public function crear_notificacion($titulo, $mensaje, $fecha, $estado) {
        $conectar = parent::Conexion();
        parent::set_names();

        $sql = "INSERT INTO notificacion (titulo, mensaje, fecha, estado) VALUES (?, ?, ?, ?)";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $titulo);
        $sql->bindValue(2, $mensaje);
        $sql->bindValue(3, $fecha);
        $sql->bindValue(4, $estado);
        $sql->execute();

        return $sql->rowCount();
    }

    // Leer todas las notificaciones
    public function obtener_notificaciones() {
        $conectar = parent::Conexion();
        parent::set_names();

        $sql = "SELECT * FROM notificacion";
        $sql = $conectar->prepare($sql);
        $sql->execute();

        return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    // Leer una notificación por ID
    public function obtener_notificacion($id) {
        $conectar = parent::Conexion();
        parent::set_names();

        $sql = "SELECT * FROM notificacion WHERE id = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $id);
        $sql->execute();

        return $resultado = $sql->fetch(PDO::FETCH_ASSOC);
    }

    // Actualizar una notificación
    public function actualizar_notificacion($id, $titulo, $mensaje, $fecha, $estado) {
        $conectar = parent::Conexion();
        parent::set_names();

        $sql = "UPDATE notificacion SET titulo = ?, mensaje = ?, fecha = ?, estado = ? WHERE id = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $titulo);
        $sql->bindValue(2, $mensaje);
        $sql->bindValue(3, $fecha);
        $sql->bindValue(4, $estado);
        $sql->bindValue(5, $id);
        $sql->execute();

        return $sql->rowCount();
    }

    // Eliminar una notificación
    public function eliminar_notificacion($id) {
        $conectar = parent::Conexion();
        parent::set_names();

        $sql = "DELETE FROM notificacion WHERE id = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $id);
        $sql->execute();

        return $sql->rowCount();
    }
}

?>
