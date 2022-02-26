// PUNTUACION VALIDATION
function displayDiv(id, elementValue) {
    if(elementValue.value == '1 - Insuficiente' || elementValue.value == '2 - Pasable'){
        document.getElementById(id).style.display = 'block';
    }
    else{
        document.getElementById(id).style.display = 'none';
    }
}

