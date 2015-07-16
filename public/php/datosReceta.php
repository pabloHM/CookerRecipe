<?php
	$dbserver = "localhost";
	$dbuser = "root";
	$password = "";
	$dbname = "dbrecetas";

	$con = mysqli_connect($dbserver, $dbuser, $password, $dbname);

	session_start();

	$uName = $_POST['user'];
	$titulo = $_POST['titulo'];

	$qry = "SELECT ingredientes, preparacion FROM trecetas WHERE nuser='".$uName."' AND titulo='".$titulo."'";
	
	$res = mysqli_query($con, $qry)or die($qry);

	while($row = $res->fetch_assoc()) {
		echo $row["ingredientes"]."~";
		echo $row["preparacion"];
    }
?>