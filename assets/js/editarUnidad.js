const id = document.getElementById('id');
const nombre = document.getElementById('nombre');

function setValuesOnModalInputs(id1, nombre1) {
    clearModalInputs();
    id.value = id1;
    nombre.value = nombre1;          
}

function clearModalInputs() {
    id.value = '';
    nombre.value = '';
}

//comentario