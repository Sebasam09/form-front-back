<?php

ob_start();
include ("./form.php");
include ("./register.php");

ob_end_clean(); //INCHARGE TO NOT SHOW THE INCLUDED HTML FROM INDEX.PHP

// GETS ALL INPUTS
$username = $_POST['username'];
$ufeedback = $_POST['ufeedback'];
$urecomendacion = $_POST['urecomendacion'];

// database insert SQL code
$sql2 = "UPDATE `userdb` SET `ufeedback` = '$ufeedback',`urecomendacion` = '$urecomendacion' WHERE `userdb`.`username` = '$username'";

// insert in database 
$rs = mysqli_query($con,$sql2);

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

    <div class="card card-header text-center card bg-primary text-white"> <h1>Gracias por completar el formulario</h1> </div>

    <div class="card card-body">
        <h3>Acontinuación podrá ver la lista de sus datos enviados</h3>
        <p>Feedback/Puntuacion:<?php echo ' ', $ufeedback?></p> <!-- Uses input value to print "$ufeedback" -->
        <p>Recomendación:<?php echo ' ', $urecomendacion?></p> <!-- Uses input value to print "$urecomendacion" -->
        <a href="logout.php" class="btn btn-danger col-md-1"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
    </div>
    <script type="text/javascript" src="utility.js"></script>
    <script type="text/javascript" src="script.js"></script>
    
</body>
</html>
