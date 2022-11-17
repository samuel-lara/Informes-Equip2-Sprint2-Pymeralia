/** Scripts que validan la introducción de datos al crear y editar una pregunta */

/* ¡¡¡¡¡¡¡¡¡¡¡ARREGLAR EN EL SPRINT 3!!!!!!!!!!!!!!!!!!!
** Tan solo con una función serviria pasando parámetros y no en este caso que hay dos
*/



function validarPreguntaCrear(){
    //Guardamos los elementos HTML que queremos utilizar en variables
    let nombrePreguntaCrear = document.getElementById('name_question_crear').value;
    let descripcionPreguntaCrear = document.getElementById('description_question_crear').value;

    //Validamos el formilario mirando si se cumplen las condiciones
    if(nombrePreguntaCrear.length >= 5 && nombrePreguntaCrear.length <= 30 && descripcionPreguntaCrear.length != 0){

        //Antes de mostrar el mensaje de validar el modal si previamente se han introducido mal los datos entonces volverá a ocultar la alerta de error
        document.getElementById('alerta_error_modal').setAttribute("style", "display:none;");

        //Si la introducción de datos es correcta entonces se visualiza una alerta correcta de validación
        $('#alerta_validado_modal').fadeIn("slow");

        //Para poder visualizar la alerta de introdución satisfactoria hacemos que redirija a la página al cabo de 1 segundo
        setTimeout(() => {
            //Si los campos son correctos el botón hará un submit del formulario
            document.forms.form_modal_crear.submit();
          }, "1000");

    }else{
        //Si el formulario contiene algun campo incorrecto muestra un mensaje en el modal de error utilizando
        //el método fadeIn de jQuery para crear una animación
        $('#alerta_error_modal').fadeIn("slow");
    }
}


//Validación al editar un formulario
function validarPreguntaEditar(){
    //Guardamos los elementos HTML que queremos utilizar en variables
    let nombrePreguntaEditar = document.getElementById('name_question_editar').value;
    let descripcionPreguntaEditar = document.getElementById('description_question_editar').value;

    //Validamos el formilario mirando si se cumplen las condiciones
    if(nombrePreguntaEditar.length >= 5 && nombrePreguntaEditar.length <= 30 && descripcionPreguntaEditar.length != 0){

        //Antes de mostrar el mensaje de validar el modal si previamente se han introducido mal los datos entonces volverá a ocultar la alerta de error
        document.getElementById('alerta_error_modal_editar').setAttribute("style", "display:none;");

        //Si la introducción de datos es correcta entonces se visualiza una alerta correcta de validación
        $('#alerta_validado_modal_editar').fadeIn("slow");

        //Para poder visualizar la alerta de introdución satisfactoria hacemos que redirija a la página al cabo de 1 segundo
        setTimeout(() => {
            //Si los campos son correctos el botón hará un submit del formulario
            document.forms.form_modal_editar.submit();
          }, "1000");

    }else{
        //Si el formulario contiene algun campo incorrecto muestra un mensaje en el modal de error utilizando
        //el método fadeIn de jQuery para crear una animación
        $('#alerta_error_modal_editar').fadeIn("slow");
    }
}





