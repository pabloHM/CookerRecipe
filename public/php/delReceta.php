<?php
	$dbserver = "ec2-54-217-202-110.eu-west-1.compute.amazonaws.com";
	$dbuser = "ujmfyynkivhwkj";
	$password = "Yzmrp7SVoVJa5e5mrs0ZsPlx8q";
	$dbname = "dfrno01mk8o5ga";

	$con = mysqli_connect($dbserver, $dbuser, $password, $dbname);

	session_start();

	$uName = $_POST['user'];
	$titulo = $_POST['titulo'];

	$qry = "DELETE FROM trecetas WHERE nuser='".$uName."' AND titulo='".$titulo."'";
	
	$res = mysqli_query($con, $qry)or die($qry);

	echo $qry;
?>