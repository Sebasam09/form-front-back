<?php
session_start();
//return to login if not logged in
if (!isset($_SESSION['user']) ||(trim ($_SESSION['user']) == '')){
	header('location:index.php');
}

include_once('User.php');

$user = new User();

//fetch user data
$sql = "SELECT * FROM userdb WHERE id = '".$_SESSION['user']."'";
$row = $user->details($sql);

?>

<!-- HOME.PHP HTML -->
<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center"></h1>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h2>Para volver al incio click en el boton "logout" </h2>
			<a href="logout.php" class="btn btn-danger"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
		</div>
	</div>
</div>
</body>
</html>