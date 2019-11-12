const id = document.getElementById('id');
const fk = document.getElementById('fk');
const nombre = document.getElementById('nombre');
const responsables = document.getElementById('responsables');
const fecha_i = document.getElementById('fecha_i');
const fecha_f = document.getElementById('fecha_f');




function setValuesOnModalInputs(id1, fk1, nombre1, responsables1, fecha_i1, fecha_f1) {
    clearModalInputs();
    id.value = id1;
    fk.value = fk1;
    nombre.value = nombre1;
    responsables.value = responsables1;
    fecha_i.value = fecha_i1;
    fecha_f.value = fecha_f1;

};



function clearModalInputs() {
    id.value = '';
    fk.value = '';
    nombre.value = '';
    responsables.value = '';
    fecha_i.value = '';
    fecha_f.value = '';
}
