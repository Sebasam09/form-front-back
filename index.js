// PUNTUACION VALIDATION
function displayDiv(id, elementValue) {
    if(elementValue.value == '1 - Insuficiente' || elementValue.value == '2 - Pasable'){
        document.getElementById(id).style.display = 'block';
    }
    else{
        document.getElementById(id).style.display = 'none';
    }
}

// WHEN CLICKED GOES TO REGISTER.PHP
document.getElementById("r_button").onclick = function () {
    location.href = "register.php";
};
