<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/function.php"); ?>
<?php require_once("../includes/validation_function.php"); ?>


<?php
$email = "";
if (isset($_POST['login'])) {
  
  
        $name = mysql_prep($_POST["name"]);
      $email = mysql_prep($_POST["email"]);
      $password = (mysql_prep($_POST["password"]));
       
    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($connection, $query);
    $resultcheck = mysqli_num_rows($result);
    
    $row  = mysqli_fetch_assoc($result);
    $check =$row['vstatus'];
    if($check == 0){
        $_SESSION["message"] = "Account is allready exist but never confirmed email address";
          redirect_to("confirm.php");
    }else{
    $hashedpwdcheck = password_verify($password, $row['password']);
    if ($hashedpwdcheck == true){
    setcookie('email',$email);
   $_SESSION['email'] = $email;
        redirect_to("../public/user.php");
    }else{
        $_SESSION["message"] = "Username/Password Not Found...";
          redirect_to("confirm.php");
        }
}
}
    

  // 5. Close database connection
	if (isset($connection)) {
	  mysqli_close($connection);
	}


?>  