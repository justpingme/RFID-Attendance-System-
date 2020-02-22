<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/function.php"); ?>
<?php
if (isset($_GET['email']) && isset($_GET['code']))
{
     $email = ($_GET['email']);
     $code = ($_GET['code']);
     
     $sql = $connection->query("SELECT * FROM users WHERE email='$email'");
     
     if ($sql->num_rows >0){
         $sql = ("UPDATE users SET vstatus='1' WHERE email='$email'");
     $result = mysqli_query($connection,$sql);
     if($result){
         $_SESSION["message"] = "Welcome! Account veryfied";
          redirect_to("confirm.php");
     }else{
         $_SESSION["message"] = "Sorry! Something Went Wrong";
          redirect_to("confirm.php");
     }
    
 }
 }




?>