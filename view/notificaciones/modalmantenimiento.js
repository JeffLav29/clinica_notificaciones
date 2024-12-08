var idnotificacion = $('#idnotificacionx').val();

function init(){
    $('#notificacion_form').on('submit', function(e){
        e.preventDefault();  // Evitar que se envíe de forma convencional
        guardaryeditar();  // Llamar la función para guardar o editar
    });
}

$(document).ready(function () {
    // Inicializar DataTables
    $('#tablaNotificaciones').DataTable({
        "aProcessing": true,
        "aServerSide": true,
        "dom": 'Bfrtip',
        "buttons": [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5'
        ],
        "ajax": {
            url: "../../controller/notificacionControlador.php?op=listar",
            type: "post"
        },
        "bDestroy": true,
        "responsive": true,
        "iDisplayLength": 10,
        "order": [[0, "desc"]],
        "language": {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            }
        },
    });
});

function guardaryeditar(){
    var formData = new FormData($('#notificacion_form')[0]);
    $.ajax({
        url: "../../controller/notificacionControlador.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(response){
            console.log(response);
            if (response == 'success') {
                $('#notificacion_form')[0].reset();
                $('#modalmantenimiento').modal('hide');
                $('#tablaNotificaciones').DataTable().ajax.reload();
                swal.fire('Registro exitoso', 'Se registró correctamente.', 'success');
            } else {
                swal.fire('Error', 'No se pudo guardar el registro.', 'error');
            }
        },
        error: function(){
            swal.fire('Error', 'Hubo un problema con la conexión.', 'error');
        }
    });
}    

function nuevo(){
    console.log("Abriendo el modal")
    $('#modalmantenimiento').modal('show');
}

function eliminar(idnotificacion){
    Swal.fire({
        title: "Eliminar!",
        text: "¿Desea eliminar el registro?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Sí, eliminar",
        cancelButtonText: "Cancelar"
    }).then((result) => {
        if (result.isConfirmed) {
            $.post("../../controller/notificacionControlador.php?op=eliminar", { idnotificacion: idnotificacion }, function(data){
                $('#tablaNotificaciones').DataTable().ajax.reload();
                Swal.fire('Eliminado', 'El registro se ha eliminado correctamente.', 'success');
            });
        }
    });
}

function cerrar() {
    $('#modalmantenimiento').modal('hide');
}
