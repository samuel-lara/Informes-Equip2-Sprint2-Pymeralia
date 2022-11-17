<!--Modal Crear Cuestionario-->
<div class="modal fade" id="modalCrear" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Crear Pregunta</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form id="test" action="../actions/crear_pregunta.php" method="POST">
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Nombre respuesta:</label>
                  <input type="text" class="form-control" name="name_question" id="name_question_crear">
                </div>
                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Descripcion de la respuesta:</label>
                  <input type="text" class="form-control" name="descripcioresposta_question" id="descripcionrespuesta_question_crear">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <!--Enviar el cuestionario solo cuando le doy click al botón-->
                  <button class="btn btn-primary" type="submit">Guardar Cuestionario</button>
              </div>  
            </form>
          </div>   
        </div>
      </div>
    </div> 