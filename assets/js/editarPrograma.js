const id = document.getElementById('id');
const nombre = document.getElementById('nombre');
const ob = document.getElementById('ob');
const fecha_ini = document.getElementById('fecha_ini');
const fecha_fin = document.getElementById('fecha_fin');


//Comentario Waldo

function setValuesOnModalInputs(id1, nombre1, ob1, fecha_ini1, fecha_fin1) {
    clearModalInputs();
    id.value = id1;
    nombre.value = nombre1;
    ob.value = ob1;
    fecha_ini.value = fecha_ini1;
    fecha_fin.value = fecha_fin1;
        
};


function clearModalInputs() {
    nombre.value = '';
    ob.value = '';
    fecha_ini.value = '';
    fecha_fin.value = '';
}