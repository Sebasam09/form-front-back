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
    <title>Document</title>
</head>
<body>
    <H1>Gracias por completar el formulario <?php echo $uname, " ",$ulname?> </H1>
    <p>Acontinuación podrá ver la lista de sus datos enviados</p>
    <p>Email:<?php echo ' ', $uemail?></p>
    <p>Nombre:<?php echo ' ', $uname?></p>
    <p>Apellido:<?php echo ' ', $ulname?></p>
    <p>Feedback/Puntuacion:<?php echo ' ', $ufeedback?></p>
    <p>Recomendación:<?php echo ' ', $urecomendacion?></p>
</body>
</html>
