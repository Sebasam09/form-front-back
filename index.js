// PUNTUACION VALIDATION
function displayDiv(id, elementValue) {
    if(elementValue.value == '1 - Insuficiente' || elementValue.value == '2 - Pasable'){
        document.getElementById(id).style.display = 'block';
    }
    else{
        document.getElementById(id).style.display = 'none';
    }
}


// EMAIL VALIDATION
// function ValidateEmail(inputText)
// {
// var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
// if(inputText.value.match(mailformat))
// {
// alert("Valid email address!");
// document.form1.text1.focus();
// return true;
// }
// else
// {
// alert("You have entered an invalid email address!");
// document.form1.text1.focus();
// return false;
// }
// }