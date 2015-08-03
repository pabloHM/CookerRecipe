<?php
	include '../cfg/config.php';
	session_start();

	$uName = $_POST['user'];
	$titulo = $_POST['titulo'];

	$qry = "DELETE FROM trecetas WHERE nuser='".$uName."' AND titulo='".$titulo."'";
	
	$res = mysqli_query($con, $qry)or die($qry);

	echo $qry;
?>