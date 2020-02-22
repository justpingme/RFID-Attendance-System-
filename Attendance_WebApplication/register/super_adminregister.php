<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Super Admin register</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="css/super_adminregister.css"> 
    </head>
<body>
    <div class="pimg">
<div class="pen-title">
  <h1>Super Admin</h1>
</div>
<div class="rerun"><a href="#">Just Enter Your Details</a></div>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login</h1>
    <form action="../action/login_super_admin.php" method="post">
      <div class="input-container">
        <input type="email" name="email" required="required"/>
        <label>Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" name="password" required="required"/>
        <label>Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button type="submit" name="login"><span>Login</span></button>
      </div>
      <div class="footer"><a href="#">Forgot your password?</a></div>
    </form>
  </div>
  <div class="card alt">
    <div class="toggle"></div>
    <h1 class="title">Register
      <div class="close"></div>
    </h1>
    <form action="../action/signup_super_admin.php" method="post">
        <div class="input-container">
        <input type="text" name="name"   title="enter your name" maxlength="40" autocomplete="on" required="required"/>
        <label>Name</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="email" name="email"  title="enter your email" maxlength="40" autocomplete="on" required="required"/>
        <label>Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password"  name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required="required" id="password" />
        <label>Password</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  name="password2" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required="required" id="confirm_password" />
        <label>Retype Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button type="submit" name="submit"><span>Next</span></button>
      </div>
    </form>
  </div>
</div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="javascript/super_adminregister.js"></script>

</body>
<script type="text/javascript">
    var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
</html>

