// PUNTUACION VALIDATION
function displayDiv(id, elementValue) {
    if(elementValue.value == '1 - Insuficiente' || elementValue.value == '2 - Pasable'){
        document.getElementById(id).style.display = 'block';
    }
    else{
        document.getElementById(id).style.display = 'none';
    }
}

document.getElementById("r_button").onclick = function () {
    location.href = "register.php";
};

// document.getElementById("r_submit").onclick = function () {
//     location.href = "index.php";
// };