<?php
	$dbserver = "ec2-54-217-202-110.eu-west-1.compute.amazonaws.com";
	$dbuser = "ujmfyynkivhwkj";
	$password = "Yzmrp7SVoVJa5e5mrs0ZsPlx8q";
	$dbname = "dfrno01mk8o5ga";

	$con = mysqli_connect($dbserver, $dbuser, $password, $dbname);

	session_start();

	$uName = $_POST['user'];
	$uEmail = $_POST['email'];
	$pWord = md5($_POST['pass']);
	$name = $_POST['name'];
	$ape1 = $_POST['ape1'];
	$ape2 = $_POST['ape2'];

	$qry = "INSERT INTO tusers(user, email, pass, nombre, ape1, ape2) VALUES ('".$uName."', '".$uEmail."', '".$pWord."', '".$name."', '".$ape1."', '".$ape2."')";
	
	mysqli_query($con, $qry)or die(false);

	echo true;

	$_SESSION['uName']=$_POST['user'];
?>