/** Script que valida la introducción de datos al crear un formulario */

//Guardamos los elementos HTML que queremos utilizar en variables
let botonGuardar = document.getElementById('boton_guardar_cuestionario');
let nombreCuestionarioCrear = document.getElementById('name_questionary_crear').value;
let autorCuestionarioCrear = document.getElementById('autor_questionary_crear').value;
let fechaCuestionarioCrear = document.getElementById('date_questionary_crear').value;

//Desactivamos el botón
//botonGuardar.disabled = true;

function validarFormularioCrear(){
    if(nombreCuestionarioCrear.length <= 5 && nombreCuestionarioCrear.length >= 17 && autorCuestionarioCrear.length != 0){
        alert("soy mas grande");
    }
    
}





