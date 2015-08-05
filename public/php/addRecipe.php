<?php
	include '../cfg/config.php';
	session_start();

	$nUser = $_POST['nuser'];
	$titulo = $_POST['titulo'];
	$ingredientes = $_POST['ingredientes'];
	$pasos = $_POST['pasos'];

	$qry = "INSERT INTO trecetas(nuser, titulo, ingredientes, preparacion) VALUES ('".$nUser."', '".$titulo."', '".$ingredientes."', '".$pasos."')";
	
	mysqli_query($con, $qry)or die(false);

	echo true;
?>