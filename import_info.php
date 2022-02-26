<?php

ob_start();
include ("./index.php");
ob_end_clean();

// get the post records
$uemail = $_POST['uemail'];
$uname = $_POST['uname'];
$ulname = $_POST['ulname'];
$ufeedback = $_POST['ufeedback'];
$urecomendacion = $_POST['urecomendacion'];

// database insert SQL code
$sql = "INSERT INTO `userdb` (uemail,uname,ulname,ufeedback,urecomendacion) VALUES ('$uemail', '$uname', '$ulname', '$ufeedback', '$urecomendacion')";

// echo $sql 

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	;

} else {
    echo "El correo utilizado ya envió un feedback, favor utilizar otro correo", exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.com/libraries/Chart.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

    <div class="card card-header text-center"> <h1>Gracias por completar el formulario <?php echo $uname, " ",$ulname?> </h1> </div>

    <div class="card card-body">
        <h3>Acontinuación podrá ver la lista de sus datos enviados</h3>
        <p>Email:<?php echo ' ', $uemail?></p>
        <p>Nombre:<?php echo ' ', $uname?></p>
        <p>Apellido:<?php echo ' ', $ulname?></p>
        <p>Feedback/Puntuacion:<?php echo ' ', $ufeedback?></p>
        <p>Recomendación:<?php echo ' ', $urecomendacion?></p>
    </div>

</body>
</html>
