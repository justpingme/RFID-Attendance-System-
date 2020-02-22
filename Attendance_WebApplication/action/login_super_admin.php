<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/function.php"); ?>
<?php require_once("../includes/validation_function.php"); ?>


<?php
$username = "";
if (isset($_POST['login'])) {
  
  
    $email = mysql_prep($_POST["email"]);
    $password = (mysql_prep($_POST["password"]));
       
    $query = "SELECT * FROM superadmin WHERE email='$email'";
    $result = mysqli_query($connection, $query);
    $resultcheck = mysqli_num_rows($result);
    
    $row  = mysqli_fetch_assoc($result);
    $check =$row['vstatus'];
    if($check == 0){
        $_SESSION["message"] = "You are unauthorised to this page You don't have permission to access this page";
          redirect_to("confirm.php");
    }else{
    $hashedpwdcheck = password_verify($password, $row['password']);
    if ($hashedpwdcheck == true){
    setcookie('email',$email);
   $_SESSION['email'] = $email;
        redirect_to("../private/super_admin.php");
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