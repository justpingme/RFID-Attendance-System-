<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/function.php"); ?>
<?php require_once("../includes/validation_function.php"); ?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>admin Register</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'> 
  <link rel="stylesheet" href="css/adminregister.css">
    

</head>
<body>
    
  <div class="container">
	<form class="signUp" action="../action/signupadmin.php" method="POST">
    <h3>Create Your Account</h3>
        <p>Just enter your Details<br/>
            for join.
		</p>
       <input class="name"type="text" required="required" name="name"
        placeholder="Enter Your Name"/>
       <input class="w100" type="email" name="email" pattern=".+@acharya.ac.in" title="something you have missed" required="required" maxlength="40"  placeholder="Insert eMail"  autocomplete='on' />
		<input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Insert Password" required="required" id="password"   />
        <input type="password" name="password2"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Retype Password" required="required" id="confirm_password"   />
        <input type="tel" name="phonenumber" required="required" pattern="[0-9]*"  maxlength="10"
        placeholder="Phone Number"/>
        
            <label for="Subject">Subject </label>
                <select name="selopt" class="dropdown-select">
                   <option value="null">Select..</option>
                   <option value="Java">Java</option>
	               <option value="Java Lab">Java Lab</option>
	               <option value="Dsinc">Dsinc</option>
	               <option value="Dsinc LAb">Dsinc Lab</option>
	               <option value="Linux">Linux lab</option>
	               <option value="Linux">os</option>
                   <option value="Co">pe</option>
                   <option value="kanada">kanadakali</option>
                </select>
		<button class="form-btn sx log-in" type="button">Log In</button>
		<button class="form-btn dx" type="submit" name="submit">Sign Up</button>
	</form>
	<form class="signIn" action="../action/loginadmin.php" method="POST">
		<h3>Welcome  Back !</h3>
		<input type="email" name="email" pattern=".+@acharya.ac.in" title="something you have missed" required="required" placeholder="Insert eMail" autocomplete='off'  />
		<input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required="required" placeholder="Insert Password" autocomplete="off" />
        <div class="or">OR</div>
		<button class="fb" type="button">Log In With Facebook</button>
        <button class="google"  type="button">Log In With Google</button>
        <button class="twitter" type="button">Log In With    Twitter</button>
        <button class="instagram" type="button">Log In With Instagram</button>
		
        <button class="form-btn sx back" type="button">Back</button>
		<button class="form-btn dx" type="submit" name="login">Log In</button>
	</form>
</div>
  <script type="text/javascript" src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
    <script type="text/javascript" src="javascript/adminregister.js"></script>
<?php include("../includes/layouts/footer.php"); ?>



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

