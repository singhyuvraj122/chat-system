<?php
session_start();
$userid = $_SESSION['userid'];
if(!$userid){
  header("location:index.php");
}
echo "<h1>Welcome \"{$userid}\"</h1>";
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="home.css">
  </head>
  <body>
    <div id="navbarCont">
      <ul id="navbar">
        <li><a href="profile.php">My Profile</a></li>
        <li id="logoutBtn"><a href="logout.php">Logout</a></li>
      </ul>
    </div>
    <div id="post">
      <form action="post.php" method="POST">
        <ul id="postCont">
          <li>Write your Post</li>
          <li><textarea id="postArea" placeholder="write your thoughts" name="postContent" maxlength="100"></textarea></li>
          <li><input type="submit" name="sendPostContent" value="Post"></li>
        </ul>
      </form>
    </div>
    <div id="TimelineCont">
      <div id="sidebar1">
        <h1>sidebar 1</h1>
      </div>
      <div id="postDisplay">
        <div>
          <span>Timeline</span>
        </div>
        <?php
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
        }
        //query
        $qry = "select * from user where userid = '{$userid}'";
        $result = mysqli_query($link,$qry);
        $row = mysqli_fetch_assoc($result);
        mysqli_close($link);?>
        <div id="postcard">
          <?php
          if($row['post'] !== ''){
            echo $row['post'];
          }
          else{
            echo "no post available";
          }
          ?>
        </div>
      </div>
      <div id="sidebar2">
        <h1>sidebar 2</h1>
      </div>
    </div>
  </body>
</html>