<?php
    //Llamamos al archivo de conexion.php
    require_once("../../config/conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("../main/mainhead.php")?>
    <title>Notificaciones</title>
</head>
<body>
    
    <?php require_once("../main/mainleftpanel.php");?>
    <?php require_once("../main/mainheadpanel.php");?>

    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-1-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a href="breadcrumb-item" href="#">Notificaciones</a>
            </nav>
        </div>
        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5">Notificaciones</h4>
            <p class="mg-b-0">Mantenimiento</p>
        </div>
        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Usuarios</h6>
                <p class="mg-b-30 tx-gray-600">Listado de Notificaciones</p>
                <button class="btn btn-outline-primary" id="add_button" onclick="nuevo()">
                    <i class="fa fa-plus-square mg-r-10"></i>Nuevo Registro
                </button>
                <div class="table-wrapper"></div>
                <table id="notificacion_data" class="table display responsive nowrap">
                    <thead>
                        <tr>
                            <th class="wd-15p">Motivo</th>
                            <th class="wd-15p">Mensaje</th>
                            <th class="wd-15p">Fecha de Emision</th>
                            <th class="wd-15p">Fecha Programada</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <?php require_once("modalmantenimiento.php");?>
    <?php require_once("../main/mainjs.php");?>
    <script type="text/javascript" src="mntnotificaciones.js"></script>

</body>
</html>