<!--Modal Crear Cuestionario-->
<div class="modal fade" id="modalCrear" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Crear Cuestionario</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!--al formulario le ponemos un preventDefault en el evento para evitar que se envie por defecto-->
              <form id="form_modal_crear"  action="../actions/crear_questionari.php" onsubmit="event.preventDefault();" method="POST">

                <div class="alert alert-danger" style="display:none;" role="alert" id="alerta_error_modal">
                  Error al rellenar los campos
                </div>

                <div class="alert alert-success" style="display:none;" role="alert" id="alerta_validado_modal">
                  Cuestionario creado correctamente
                </div>

                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Nombre Cuestionario:</label>
                  <input type="text" class="form-control" name="name_questionary" id="name_questionary_crear" required>
                </div>
                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Autor:</label>
                  <input type="text" class="form-control" name="autor_questionary" id="autor_questionary_crear" required>
                </div>
                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Fecha:</label>
                  <input type="date" class="form-control" name="date_questionary" id="date_questionary_crear" required>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <!--Enviar el cuestionario solo cuando le doy click al bot??n-->
                  <button class="btn btn-primary" id="boton_guardar_cuestionario" onclick="validarFormularioCrear();">Guardar Cuestionario</button>
              </div>  
            </form>
          </div>   
        </div>
      </div>
    </div> 