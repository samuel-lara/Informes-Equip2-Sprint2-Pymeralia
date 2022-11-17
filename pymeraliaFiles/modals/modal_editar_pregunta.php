<!--Modal Editar Cuestionario-->
<div class="modal fade" id="modalEditar-<?php echo $mostrar['id_question']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Editar Pregunta</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form id="test" action="../actions/" method="POST">
                  <input type="number" value="<?php echo $mostrar['id_question']?>" name="id_question">
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Nombre Pregunta</label>
                  <input type="text" class="form-control" name="name_question" id="name_question_edit_" value="<?php echo $mostrar['name_question']?>">
                </div>
                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Descripcion Pregunta:</label>
                  <input type="text" class="form-control" name="description_question" id="description_question_edit_" value="<?php echo $mostrar['description_question']?>">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <!--Enviar el cuestionario solo cuando le doy click al botón-->
                  <button class="btn btn-primary" type="submit">Guardar Pregunta</button>
              </div>  
            </form>
            </div>
          </div>
        </div>
      </div>