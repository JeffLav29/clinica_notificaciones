<html lang="es">
<head>
    <?php require_once("../Main/mainhead.php"); ?>
    <title>PROYECTO MVC - Login</title>
</head>
<body>
    <div class="d-flex align-items-center 
    justify-content-center bg-br-light ht-100v">

        <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
            <div class="signin-logo tx-center tx-28 tx-bold tx-inverse">
                <span class="tx-normal">Login</span>
            </div>

            <div class="form-group">
                <label for="">DNI:</label>
                <input type="text" class="form-control" placeholder="Ingrese su Dni" id="user_usu" autocomplete="off">
            </div>

            <div class="form-group">
                <label for="">Contraseña:</label>
                <input type="password" class="form-control" placeholder="Ingrese su Contraseña" id="user_pass" autocomplete="off">
            </div>


            <button type="submit" class="btn btn-info btn-block" id="btningresar">Ingresar</button>

            <!--
            <div class="mg-t-60 tx-center">No eres miembro? 
                <a href="./view/register/index.php" class="tx-info">Registrarse</a>
            </div>
            -->

        </div>

    </div>

    <?php require_once("../main/mainjs.php"); ?>
    <script src="./login.js"></script>
</body>
</html>