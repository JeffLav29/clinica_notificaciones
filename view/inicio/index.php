<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenidos a la Clínica Dr. Paliza</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">

        <!-- Barra de Navegación -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <img src="../../public/img/clinica.jpg" alt="Logo" width="40" height="40"
                        class="d-inline-block align-text-top me-2">
                    Clínica Dr. Paliza
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Equipo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sistema Médico</a>
                        </li>
                        <li class="nav-item">
                            <a href="../main/logout.php" class="btn btn-danger nav-link">Cerrar Sesión</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>





        <!-- Encabezado -->
        <header class="text-center my-4">
            <h1>Bienvenidos a la Clínica Dr. Paliza</h1>
            <p class="lead">
                Ofrecemos atención médica de calidad con profesionales altamente capacitados.
            </p>
        </header>

        <!-- Contenido Principal -->
        <section class="d-flex flex-wrap align-items-center justify-content-between my-5">
            <!-- Parte Izquierda -->
            <div class="col-12 col-md-6 text-center text-md-start mb-4">
                <h2 class="text-primary">¿En qué te podemos ayudar?</h2>
            </div>

            <!-- Parte Derecha -->
            <div class="col-12 col-md-6">
                <div class="row">
                    <!-- Botón 1 -->
                    <div class="col-6 col-sm-6 mb-3">
                        <a href="../notificaciones/index.php" class="btn btn-outline-primary w-100 py-4">
                            <i class="fa fa-calendar fa-2x"></i><br>
                            Consultar Notificaciones
                        </a>
                    </div>
                    <!-- Botón 2 -->
                    <div class="col-6 col-sm-6 mb-3">
                        <a href="#" class="btn btn-outline-success w-100 py-4">
                            <i class="fa fa-user-md fa-2x"></i><br>
                            Conocer a nuestros médicos
                        </a>
                    </div>
                    <!-- Botón 3 -->
                    <div class="col-6 col-sm-6 mb-3">
                        <a href="#" class="btn btn-outline-warning w-100 py-4">
                            <i class="fa fa-flask fa-2x"></i><br>
                            Consultar resultados
                        </a>
                    </div>
                    <!-- Botón 4 -->
                    <div class="col-6 col-sm-6 mb-3">
                        <a href="#" class="btn btn-outline-info w-100 py-4">
                            <i class="fa fa-info-circle fa-2x"></i><br>
                            Contactarnos
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pie de Página -->
        <footer class="text-center mt-4">
            <p>&copy; <?php echo date("Y"); ?> Clínica Dr. Paliza. Todos los derechos reservados.</p>
        </footer>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>

</html>