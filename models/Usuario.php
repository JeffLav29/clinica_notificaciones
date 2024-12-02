<?php

class Usuario extends Conectar{
    public function login_usuario($usuario,$contra){
        $conectar = parent::Conexion();
        parent::set_names();

        $sql = "SELECT * FROM usuario WHERE dni = ? AND contra = ? AND estado = 1";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1,$usuario);
        $sql->bindValue(2,$contra);
        $sql->execute();

        return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>