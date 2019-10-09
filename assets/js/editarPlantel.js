const id = document.getElementById('id');
const tipo = document.getElementById('tipo');
const numero = document.getElementById('numero');
const nombrePlantel = document.getElementById('nombre');
const telefono = document.getElementById('telefono');


//Comentario Waldo

function setValuesOnModalInputs(id1, tipo1, numero1, nombre, telefono1) {
    clearModalInputs();
    id.value = id1;
    tipo.value = tipo1;
    numero.value = numero1;
    nombrePlantel.value = nombre;
    telefono.value = telefono1;
        
};

//commit de kike

function clearModalInputs() {
    nombrePlantel.value = '';
    tipo.value = '';
    numero.value = '';
    telefono.value = '';
}