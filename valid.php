<?php
session_start();

//database connection config
$host = "localhost";
$user = "root";
$pass = "kamwalibai";
$database = "db2";
$port = "3308";

$link = mysqli_connect($host,$user,$pass,$database,$port);

//connection status
if($link){
	echo "connection established";
}
else{
	echo "connection failed";
}

//data collection
$username = $_REQUEST['userid'];
$userpass = $_REQUEST['userpass'];	

//query
$qry = "select * from user where userid = '$username' && userpass = '$userpass' ";
$result = mysqli_query($link,$qry);
if(mysqli_num_rows($result) > 0){
	$row = mysqli_fetch_assoc($result);
	$_SESSION['userid'] = $row['userid'];
	$_SESSION['userpass'] = $row['userpass'];
	mysqli_close();
	header("location:home.php");
}
else{
	mysqli_close();
	session_destroy();
	header("location:index.php");
}
?>