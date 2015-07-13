<?php
	$dbserver = "localhost";
	$dbuser = "root";
	$password = "";
	$dbname = "dbrecetas";

	$con = mysqli_connect($dbserver, $dbuser, $password, $dbname);

	session_start();

	$uName = $_POST['user'];
	$pWord = $_POST['pass'];
	$qry = "SELECT user, pass FROM tusers WHERE user='".$uName."' AND pass='".$pWord."'";
	
	$res = mysqli_query($con, $qry)or die($qry);
	$num_row = mysqli_num_rows($res);
	$row=mysqli_fetch_array($res);

	if($num_row == 1){
		echo true;
		$_SESSION['uName'] = $row['user'];
	}
	else{
		echo false;
	}
?>