<?php
	include '../cfg/config.php';
	session_start();

	$uName = $_POST['user'];
	$qry = "SELECT * FROM trecetas WHERE nuser='".$uName."'";
	
	$res = mysqli_query($con, $qry)or die($qry);

	while($row = $res->fetch_assoc()) {
		echo $row["titulo"].";";
    }
?>