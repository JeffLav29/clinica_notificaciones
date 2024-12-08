<?php 
include 'modalmantenimiento.php'; 
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Notificaciones</title>
    <!-- CSS de DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
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
    </div>

    <div class="container mt-5">
        <h1 class="mb-4">Lista de Notificaciones</h1>

        <!-- Botón para crear una nueva notificación -->
        <button class="btn btn-success mb-4" id="btnCrearNotificacion" onclick="nuevo()">Crear Notificación</button>

        <!-- Tabla para las notificaciones -->
        <table id="tablaNotificaciones" class="table table-striped table-bordered">
            <thead class="table-primary">
                <tr>
                    <th>ID</th>
                    <th>Médico</th>
                    <th>Paciente</th>
                    <th>Motivo</th>
                    <th>Mensaje</th>
                    <th>Fecha de Creación</th>
                    <th>Programado Para</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <!-- Las filas serán generadas dinámicamente por AJAX -->
            </tbody>
        </table>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- JS de DataTables -->
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Enlace al archivo JavaScript externo -->
    <script type="text/javascript" src="modalmantenimiento.js"></script>
</body>

</html>
