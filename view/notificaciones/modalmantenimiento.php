<div id="modalmantenimiento" class="modal fade" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content bd-0">
            <div class="modal-header pd-y-20 pd-x-25">
                <h6 id="lbltitulo" class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold"></h6>
            </div>
            <!-- Formulario de mantenimiento -->
            <form method="post" id="notificacion_form">
                <div class="modal-body">
                    <input type="hidden" name="idnotificacion" id="idnotificacion">

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="lblmedico_id" class="form-control-label">Id Médico: <span class="tx-danger">*</span></label>
                            <input type="text" class="form-control" id="medico_id" name="medico_id" required>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="lblpaciente_id" class="form-control-label">Id Paciente: <span class="tx-danger">*</span></label>
                            <input type="text" class="form-control" id="paciente_id" name="paciente_id" required>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="lblmotivo" class="form-control-label">Motivo: <span class="tx-danger">*</span></label>
                            <textarea class="form-control" id="motivo" name="motivo" required></textarea>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="lblmensaje" class="form-control-label">Mensaje: <span class="tx-danger">*</span></label>
                            <textarea class="form-control" id="mensaje" name="mensaje" required></textarea>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="lblcreado_en" class="form-control-label">Fecha de Creación: <span class="tx-danger">*</span></label>
                            <input type="datetime-local" class="form-control" id="creado_en" name="creado_en" required>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="lblprogramado_para" class="form-control-label">Programado Para: <span class="tx-danger">*</span></label>
                            <input type="datetime-local" class="form-control" id="programado_para" name="programado_para" required>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="lblleido" class="form-control-label">Leído: <span class="tx-danger">*</span></label>
                            <select class="form-control" id="leido" name="leido" required>
                                <option value="1">Sí</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="cerrar()">Cerrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
