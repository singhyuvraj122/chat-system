<?php
session_start();
$userid = $_SESSION['userid'];
if(!$userid) {
  header("location:index.php");
}
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Edit Profile</title>
  </head>
  <body>
    <div>
      <form action="profile_data_insert.php" method=" POST" enctype="multipart/form-data">
        <table>
          <legend><h1>Profile Information</h1></legend>
          <tr>
            <th><label for="fname">First  Name</label></th>
            <td><input id="fname" type="text" name="firstname" placeholder="enter your first name"></td>
          </tr>
          <tr>
            <th><label for="lname">Last Name</label></th>
            <td><input id="lname" type="text" name="lastname" placeholder="enter your last name"></td>
          </tr>
          <tr>
            <th>Gender</th>
            <td><label>Male<input required type="radio" name="gender" value="m"></label><label>Female<input required type="radio" name="gender" value="f"></label></td>
          </tr>
          <tr>
            <th><label>Age</label></th>
            <td><input type="number" name="age" placeholder="enter your age" min="0" max="100" size="3" maxlength="3" ></td>
          </tr>
          <tr>
            <th><label>Email</label></th>
            <td><input type="email" name="email" placeholder="enter your email"></td>
          </tr>
        </table>
        <input type="submit" name="update" value="Update">
      </form>
      <form action="profile_data_insert.php" method="POST" enctype="multipart/form-data">
        <hr>
        <span><h2>Photo Upload</h2></span>
        <input type="file" name="photoFile">
        <input type="submit" name="photoSubmitBtn" value="Upload">
      </form>
    </div>
    <hr>    
    <a href="profile.php"><h3>Profile Page</h3></a>
  </body>
</html>
