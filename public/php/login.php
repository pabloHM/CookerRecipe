<?php
	define('DB_SERVER','localhost');
	define('DB_NAME','DBRecetas');
	define('DB_USER','root');
	define('DB_PASS','');

	$con = @mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
	@mysqli_select_db(DB_NAME, $con);

	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$result='';

	$sql = "SELECT * FROM tUsers WHERE user = '$user' and pass = '$pass'";
    $rec = @mysqli_query($sql);
    $count = 0;

    while($row = @mysqli_fetch_object($rec)){
        $count++;
        $result = $row;
    }

    if($count == 1){
        return 1;
    }else{
        return 0;
    }
?>