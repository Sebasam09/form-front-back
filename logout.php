<?php
	// STOPS SESSION AND GO TO INDEX.PHP

	session_start();
	session_destroy();

	header('location:index.php');
?>