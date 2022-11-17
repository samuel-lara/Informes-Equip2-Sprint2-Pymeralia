/** Scripts que validan la introducción de datos al crear y editar un formulario */

/* ¡¡¡¡¡¡¡¡¡¡¡ARREGLAR EN EL SPRINT 3!!!!!!!!!!!!!!!!!!!
** Tan solo con una función serviria pasando parámetros y no en este caso que hay dos
*/



function validarFormularioCrear(){
    //Guardamos los elementos HTML que queremos utilizar en variables
    let nombreCuestionarioCrear = document.getElementById('name_questionary_crear').value;
    let autorCuestionarioCrear = document.getElementById('autor_questionary_crear').value;
    let fechaCuestionarioCrear = document.getElementById('date_questionary_crear').value;


    //Validamos el formilario mirando si se cumplen las condiciones
    if(nombreCuestionarioCrear.length >= 5 && nombreCuestionarioCrear.length <= 30 && autorCuestionarioCrear.length != 0 && fechaCuestionarioCrear.length != 0){

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
function validarFormularioEditar(){
    //Guardamos los elementos HTML que queremos utilizar en variables
    let nombreCuestionarioEditar = document.getElementById('name_questionary_editar').value;
    let autorCuestionarioEditar = document.getElementById('autor_questionary_editar').value;
    let fechaCuestionarioEditar = document.getElementById('date_questionary_editar').value;


    //Validamos el formilario mirando si se cumplen las condiciones
    if(nombreCuestionarioEditar.length >= 5 && nombreCuestionarioEditar.length <= 30 && autorCuestionarioEditar.length != 0 && fechaCuestionarioEditar.length != 0){

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





