<!--Modal Editar Cuestionario-->
<div class="modal fade" id="modalEditar-<?php echo $mostrar['id_question']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Editar Pregunta</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <!--al formulario le ponemos un preventDefault en el evento para evitar que se envie por defecto-->
            <form id="form_modal_editar" action="../actions/editar_pregunta.php" onsubmit="event.preventDefault();" method="POST">

                <div class="alert alert-danger" style="display:none;" role="alert" id="alerta_error_modal_editar">
                  Error al rellenar los campos
                </div>

                <div class="alert alert-success" style="display:none;" role="alert" id="alerta_validado_modal_editar">
                  Pregunta editada correctamente
                </div>

                  <input type="hidden" value="<?php echo $mostrar['id_question']?>" name="id_question">
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Nombre Pregunta:</label>
                  <input type="text" class="form-control" name="name_question" id="name_question_editar" value="<?php echo $mostrar['name_question']?>">
                </div>
                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Descripcion Pregunta:</label>
                  <input type="text" class="form-control" name="description_question" id="description_question_editar" value="<?php echo $mostrar['description_question']?>">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <!--Enviar el cuestionario solo cuando le doy click al botón-->
                  <button class="btn btn-primary" type="submit" onclick="validarFormularioEditar()">Guardar Pregunta</button>
              </div>  
            </form>
            </div>
          </div>
        </div>
      </div>