<?php

ob_start(); 
include ("./index.php");
ob_end_clean(); //INCHARGE TO NOT SHOW THE INCLUDED HTML FROM INDEX.PHP

// GETS ALL INPUTS
$uemail = $_POST['uemail'];
$uname = $_POST['uname'];
$ulname = $_POST['ulname'];
$ufeedback = $_POST['ufeedback'];
$urecomendacion = $_POST['urecomendacion'];

// database insert SQL code
$sql = "INSERT INTO `userdb` (uemail,uname,ulname,ufeedback,urecomendacion) VALUES ('$uemail', '$uname', '$ulname', '$ufeedback', '$urecomendacion')";

// insert in database 
$rs = mysqli_query($con, $sql);

// FUNCTION THAT VALIDATES THE EMAIL PLACED ON THE INPUTS AREN'T USED ALREADY
if($rs)
{
	;

} else {
    echo "El correo utilizado ya envió un feedback, favor utilizar otro correo", exit;
}

// CHART

if(isset($_POST["action"]))
{
	if($_POST["action"] == 'insert')
	{
		$data = array(
			':ufeedback'		=>	$_POST["ufeedback"]
		);

		$query = "
		INSERT INTO userdb 
		(ufeedback) VALUES (:ufeedback)
		";

		$statement = $connect->prepare($query);

		$statement->execute($data);

		echo 'done';
	}

	if($_POST["action"] == 'fetch')
	{
		$query = "
		SELECT ufeedback, COUNT(id) AS Total 
		FROM userdb 
		GROUP BY ufeedback
		";

		$result = $connect->query($query);

		$data = array();

		foreach($result as $row)
		{
			$data[] = array(
				'ufeedback'		=>	$row["ufeedback"],
				'total'			=>	$row["Total"],
				'color'			=>	'#' . rand(100000, 999999) . ''
			);
		}

		echo json_encode($data);
	}
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

    <title>Document</title>
</head>
<body>

    <div class="card card-header text-center card bg-primary text-white"> <h1>Gracias por completar el formulario <?php echo $uname, " ",$ulname?> </h1> </div>

    <div class="card card-body">
        <h3>Acontinuación podrá ver la lista de sus datos enviados</h3>
        <p>Email:<?php echo ' ', $uemail?></p>
        <p>Nombre:<?php echo ' ', $uname?></p>
        <p>Apellido:<?php echo ' ', $ulname?></p>
        <p>Feedback/Puntuacion:<?php echo ' ', $ufeedback?></p>
        <p>Recomendación:<?php echo ' ', $urecomendacion?></p>
    </div>

    <div class="container-fluid">
        <div class="col-md-4">
            <div class="card mt-4">
                <div class="card-header">Grafico</div>
                <div class="card-body">
                    <div class="chart-container pie-chart">
                        <canvas id="pie_chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="card" id="card-1">
        <div class="chart-canvas">
            <canvas id="db_chart"></canvas>
            <script>
                var Pie = document.getElementById('ExpensesByCategory').getContext('2d');
                PieChart = new Chart(Pie,{ type: 'pie',data: DataEC, option: optionsEC});
            </script>
        </div>
    </div> -->
    <script type="text/javascript" src="utility.js"></script>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>
