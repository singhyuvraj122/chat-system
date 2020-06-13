<?php
session_start();
if(!isset($_POST['signUp'])){
 session_destroy();
 header("location:index.php");
}

//get user data
$userid = $_POST['signUpUserid'];
$userpass = $_POST['signUpPass'];

//connection config
$host = "localhost";
$user = "root";
$pass = "kamwalibai";
$database = "db2";
$port = "3308";

//connection status
$link = mysqli_connect($host,$user,$pass,$database,$port);
if(!$link){
 echo "connection failed";
 echo '<br>go back ? Click <a href="index.php">here</a>';
}

//query
$row = null;
$qry = "select * from user where userid = '{$userid}' && userpass = '{$userpass}'";
$result = mysqli_query($link,$qry);
if(mysqli_num_rows($result) === 0){
 $_SESSION['userid'] = $userid;
 $_SESSION['userpass'] = $userpass;
 $qry = "insert into user(userid,userpass) values('{$userid}','{$userpass}')";
 $result = mysqli_query($link,$qry);
 if ($result) {
  mysqli_close($link);
  header("location:home.php");}
  else{
   mysqli_close($link);
   echo 'query failed. Click <a href="index.php">here</a>';}
 }
 else{
  mysqli_close($link);
  session_destroy();
  header("location:index.php");
 }

?>