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
        <nav class="navbar navbar-light bg-light justify-content-between">
            <a class="navbar-brand">Clínica Dr. Paliza</a>
            <form class="form-inline">
                <a href="/view/main/logout.php" class="btn btn-danger">Cerrar Sesión</a>
            </form>
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
                        <a href="/view/notificaciones/notificacion.php" class="btn btn-outline-primary w-100 py-4">
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
