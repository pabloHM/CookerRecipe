<?php
	$dbserver = "ec2-54-217-202-110.eu-west-1.compute.amazonaws.com";
	$dbuser = "ujmfyynkivhwkj";
	$password = "Yzmrp7SVoVJa5e5mrs0ZsPlx8q";
	$dbname = "dfrno01mk8o5ga";

	$con = mysqli_connect($dbserver, $dbuser, $password, $dbname);

	session_start();

	$nUser = $_POST['nuser'];
	$titulo = $_POST['titulo'];
	$ingredientes = $_POST['ingredientes'];
	$pasos = $_POST['pasos'];

	$qry = "INSERT INTO trecetas(nuser, titulo, ingredientes, preparacion) VALUES ('".$nUser."', '".$titulo."', '".$ingredientes."', '".$pasos."')";
	
	mysqli_query($con, $qry)or die(false);

	echo true;
?>