<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/function.php"); ?>


<?php
if (isset($_POST['submit'])) {
  // Process the form
 

    $name = mysql_prep($_POST["name"]);
    $email = mysql_prep($_POST["email"]);
    $password =  ($_POST["password"]);
    $phonenumber =  mysql_prep($_POST["phonenumber"]);
    $selopt =  mysql_prep($_POST["selopt"]);
    
      $sql = "SELECT * FROM admin WHERE email='$email'";
      $check = mysqli_query($connection,$sql);
    
      if($check->num_rows > 0){
          $_SESSION["message"] = "Account All ready exist with $email";
          redirect_to("confirm.php");
      }else{
          $code = md5(uniqid());
    $hashed_pwd = password_hash($password, PASSWORD_DEFAULT);
    
    $query  = "INSERT INTO admin (";
    $query .= "  name, email, password, phonenumber, selopt, code, vstatus";
    $query .= ") VALUES (";
    $query .= "  '{$name}', '{$email}', '{$hashed_pwd}', '{$phonenumber}', '{$selopt}', '{$code}', '0'";
    $query .= ")";
    $result = mysqli_query($connection, $query);

    if ($result) {

        require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'abhinayraj9755@gmail.com';          // SMTP username
$mail->Password = 'abhinayraj97551226'; // SMTP password
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                 // TCP port to connect to

$mail->setFrom('abhinayraj9755@gmail.com', 'abhinay');
$mail->addReplyTo('abhinayraj9755@gmail.com', 'Abhinay');
$mail->addAddress($email);   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1>This is Abhinay Raj</h1>';
$bodyContent .= '<p>lThanks!<b>offline</b></p>';

$mail->Subject = 'Email from Abhinay Raj';
$mail->Body = "Please click below lick to verify your account<br/><br/>
<a href='http://abhinay.888webhost.com/action/aactivate.php?email=$email&code= $code'>click here</a>";

if(!$mail->send()) {
    redirect_to("confirm.php");
      $_SESSION["message"] = "Admin creation failed."; 
    
} else {
    $_SESSION["message"] = "Confirmation Link Send to Your respective Email Id. </b> Please Confirm  And After that try to Login";
      redirect_to("confirm.php");
	
}
        }
     
    }
  }
else {
  // This is probably a GET request
  
}  end: if (isset($_POST['submit']))

    if (isset($connection)){
 mysqli_close($connection);
}
?>