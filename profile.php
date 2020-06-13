<?php
session_start();
$userid = $_SESSION['userid'];
$userpass = $_SESSION['userpass'];
if(!$userid){
	header("location:index.php");
}
//database connection config
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
$qry = "select * from user where userid = '{$userid}' && userpass = '{$userpass}'";
$result = mysqli_query($link,$qry);
$row =  mysqli_fetch_assoc($result);

?>
<!DOCTYPE HTML>
<html>
  <head>
		<title>Profile</title>
	</head>
	<body>
    <table>
      <tr>
        <th>First Name</th>
        <td><?php echo "{$row['firstName']}";?></td>
      </tr>
      <tr>
        <th>Last Name</th>
        <td><?php echo "{$row['lastName']}";?></td>
      </tr>
      <tr>
        <th>Gender</th>
        <td><?php echo "{$row['gender']}";?></td>
      </tr>
      <tr>
        <th>Age</th>
        <td><?php echo "{$row['age']}";?></td>
      </tr>
      <tr>
        <th>Email</th>
        <td><?php echo "{$row['email']}";?></td>
      </tr>
    </table>
    <?php mysqli_close($link);?>
    <a href="profile_data_input">Edit Profile</a><a href="home.php">Home Page</a>
  </body>
</html>