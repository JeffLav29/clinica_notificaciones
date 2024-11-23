<?php

class Usuario extends Conectar{
    public function login_usuario($usuario,$contraseña){
        $conectar = parent::Conexion();
        parent::set_names();

        $sql = "SELECT * FROM usuario WHERE idusuario = ? AND contra = ? AND estado = 1";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1,$usuario);
        $sql->bindValue(2,$contraseña);
        $sql->execute();

        return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>