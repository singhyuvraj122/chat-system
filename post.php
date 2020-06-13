<?php
session_start();
$userid = $_SESSION['userid'];

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
 echo '<br>go back ? Click <a href="home.php">here</a>';
}

//variables
$postContent = null;
$result = null;
$qry = null;


if(isset($_REQUEST['sendPostContent'])){
 $postContent = $_REQUEST['postContent'];
}
else{
 header("location:http://localhost/web_dev_projects/chatty/home.php");
}

//query
 $qry = "update user set post = '{$postContent}' where userid = '{$userid}'";
 $result = mysqli_query($link, $qry);
if ($result){
 mysqli_close($link);
 header("location:http://localhost/web_dev_projects/chatty/home.php");
}
?>