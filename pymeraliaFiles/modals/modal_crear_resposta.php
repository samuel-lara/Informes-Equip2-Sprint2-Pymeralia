<!--Modal Crear Cuestionario-->
<div class="modal fade" id="modalresposta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Crear Pregunta</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!--al formulario le ponemos un preventDefault en el evento para evitar que se envie por defecto-->
              <form id="form_modal_crear" onsubmit="event.preventDefault();" action="../actions/crear_pregunta.php" method="POST">

                <div class="alert alert-danger" style="display:none;" role="alert" id="alerta_error_modal_crear">
                  Error al rellenar los campos
                </div>

                <div class="alert alert-success" style="display:none;" role="alert" id="alerta_validado_modal_crear">
                  Pregunta creada correctamente
                </div>

                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Nombre Resposta:</label>
                  <input type="text" class="form-control" name="name_question" id="name_question_crear" required>
                </div>
                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Descripcion Resposta:</label>
                  <input type="text" class="form-control" name="description_question" id="description_question_crear" required>
                </div>
                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Cuestionario</label>
                  <input type="text" class="form-control" name="description_question" id="description_question_crear" required>
                </div>
                <div class="modal-footer">
                  <!--Enviar el cuestionario solo cuando le doy click al botón-->
                  <button class="btn btn-primary" id="boton_guardar_cuestionario" onclick="validarFormularioCrear();">Guardar Pregunta</button>
              </div>  
            </form>
          </div>   
        </div>
      </div>
    </div> 