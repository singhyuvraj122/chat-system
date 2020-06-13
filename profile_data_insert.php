<?php
session_start();
$userid = $_SESSION['userid'];
$userpass = $_SESSION['userpass'];
if(!$userid){
  header("location:index.php");
}

//data collection
$firstName = $_REQUEST['firstname'];
$lastName = $_REQUEST['lastname'];
$gender = $_REQUEST['gender'];
$age = $_REQUEST['age'];
$email = $_REQUEST['email'];
$photoData = $_POST['photoFile'];
var_dump($photoData);

/*//database connection config
$host = "localhost";
$user = "root";
$pass = "kamwalibai";
$database = "db2";
$port = "3308";

$link = mysqli_connect($host,$user,$pass,$database,$port);

//connection status
if(!$link){
	echo "<br>connection failed";
}

//query
  if($firstName !== ''){
    $qry = "update user set firstName = '{$firstName}' where userid = '{$userid}'";
    $res1 = mysqli_query($link,$qry);
  }
  if($lastName !== ''){
    $qry = "update user set lastName = '{$lastName}' where userid = '{$userid}'";
    $res2 = mysqli_query($link,$qry);
  }
  if($gender !== ''){
    $qry = "update user set gender  = '{$gender}' where userid = '{$userid}'";
    $res3 = mysqli_query($link,$qry);
  }
  if($age !== ''){
    $qry = "update user set age  = '{$age}' where userid = '{$userid}'";
    $res4 = mysqli_query($link,$qry);
  }
  if($email !== ''){
    $qry = "update user set email  = '{$email}' where userid = '{$userid}'";
    $res6 = mysqli_query($link,$qry);
  }
  if($res1 || $res2 || $res3 || $res4 || $res5 || $res6){
    mysqli_close($link);
    header("location:http://localhost/web_dev_projects/chatty/profile.php");
  }
  else{
    header("location:http://localhost/web_dev_projects/chatty/profile_data_input.php");
  }*/
?>