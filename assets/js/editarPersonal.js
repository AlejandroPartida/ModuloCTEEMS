const curp = document.getElementById('curp');
const telefono = document.getElementById('telefono');
const correo = document.getElementById('correo');
const puesto = document.getElementById('puesto');
const plantel = document.getElementById('plantel');

function setValuesOnModalInputs(curp1, telefono1, correo1, puesto1, plantel1) {
    clearModalInputs();
    curp.value = curp1.trim();
    telefono.value = telefono1;
    correo.value = correo1;
    puesto.value = puesto1;
    plantel.value = plantel1;
        
};

function validateModal(){
    if (curp.value != '' && telefono.value != '' && correo.value != '' && puesto.value != '' && plantel.value != '') {
        return true;
    }
    else {
        event.preventDefault();
        Swal.fire({
            title: 'Por favor completa todos los campos',
            type: 'error',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Aceptar'
        });
        return false;
    }
}

function clearModalInputs() {
    curp.value = '';
    telefono.value = '';
    correo.value = '';
    puesto.value = '';
}

const test = () => {
    console.log('hi');
    
}