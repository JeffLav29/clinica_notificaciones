$(document).ready(function () {
    $('#notificacion_data').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "../../controller/notificacionControlador.php?op=listar",
            "type": "GET"
        },
        "destroy": true, 
        "responsive": true,
        "bInfo": true,
        "iDisplayLength": 10,
        "order": [[2, "desc"]],
        "language": {
            "processing": "Procesando...",
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "emptyTable": "Ningún dato disponible en esta tabla",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "search": "Buscar:",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        },
        "columns": [
            { "data": "motivo", "title": "Motivo" },
            { "data": "mensaje", "title": "Mensaje" },
            { "data": "creado_en", "title": "Fecha de Emisión" },
            { "data": "programado_para", "title": "Fecha Programada" },
            { 
                "data": null, 
                "title": "Acciones",
                "render": function (data, type, row) {
                    return `
                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="editar(${row.idnotificacion})">Editar</button>
                        <button type="button" class="btn btn-outline-danger btn-sm" onclick="eliminar(${row.idnotificacion})">Eliminar</button>
                    `;
                }
            }
        ]
    });
});


function nuevo() {
    $('#modalmantenimiento').modal('show');
}

function cerrar(){
    $('#modalmantenimiento').modal('hide');
}