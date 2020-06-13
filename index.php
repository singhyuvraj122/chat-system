<!DOCTYPE HTML>
<html>
  <head>
    <title>login</title>
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet"> 
    <link type="text/css" rel="stylesheet" href="index.css">
  </head>
  <body>
    <div id="mainCont">
      <div id="cont1">
        <h1>Welcome <br>to<br> Chatty</h1>
      </div>
      <div id="cont2">
        <!-- Login container -->
        <div>
          <form class="formInputCont" action="valid.php" method="POST">
            <div class="userItem">Sign in</div>
            <div class="userItem">
              <input type="text" name="userid" placeholder="username" maxlength="15" size="15">
            </div>
            <div class="userItem">
              <input type="password" name="userpass" placeholder="password" maxlength="15" size="15">
            </div>
            <div class="userItem">
              <input class="formBtn" required type="submit" name="submit" value="Login">
            </div>
          </form>
        </div>
        <!-- Signup container -->
        <div>
          <form class="formInputCont" action="signup.php" method="POST">
            <div class="userItem">Sign Up</div>
            <div class="userItem">
              <input type="text" name="signUpUserid" placeholder="new username" maxlength="15" size="15"></div>
            <div class="userItem">
              <input type="text" name="signUpPass" placeholder="new password" maxlength="15" size="15"></div>
            <div class="userItem">
              <input class="formBtn" type="submit" name="signUp" value="Register"></div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>