const id = document.getElementById('id');
const nombre = document.getElementById('nombre');
const desc = document.getElementById('descripcion');





function setValuesOnModalInputs(id1, nombre1, desc1) {
    clearModalInputs();
    id.value = id1;
    nombre.value = nombre1;
    desc.value = desc1;
   
        
};



function clearModalInputs() {
    id.value = '';
    nombre.value = '';
    desc.value = '';
    
}
