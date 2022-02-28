<?php

ob_start();
include ("./register.php");
ob_end_clean(); //INCHARGE TO NOT SHOW THE INCLUDED HTML FROM INDEX.PHP

// GETS ALL INPUTS
$uemail = $_POST['uemail'];
$username = $_POST['username'];
$pwd = $_POST['pwd'];
$rpwd = $_POST['rpwd'];
$uname = $_POST['uname'];
$ulname = $_POST['ulname'];

// database insert SQL code
$sql = "INSERT INTO `userdb` (uemail,username,pwd,rpwd,uname,ulname) VALUES ('$uemail','$username','$pwd', '$rpwd', '$uname', '$ulname')";

// insert in database 
$rs = mysqli_query($con, $sql);

// FUNCTION THAT VALIDATES THE EMAIL PLACED ON THE INPUTS AREN'T USED ALREADY
if($rs)
{
	;

} else {
    echo "El correo utilizado ya envió un feedback, favor utilizar otro correo", exit;
}

?>

<!-- IMPORT INFOR HTML -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>

    <div class="card card-header text-center card bg-primary text-white"> <h1>Gracias por completar el formulario, <?php echo $username?> </h1> </div>

    <div class="card card-body">
        <h3>Ahora podra iniciar sesion y completar el formulario</h3>
        <a href="logout.php" class="btn btn-danger col-md-1"><span class="glyphicon glyphicon-log-out"></span> Salir e iniciar sesion</a>
    </div>
    <script type="text/javascript" src="utility.js"></script>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>
