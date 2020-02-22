<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/function.php"); ?>
<?php
if (isset($_POST['subscribe'])) {
    $email = mysql_prep($_POST["email"]);
    
    $query  = "INSERT INTO subscriber (";
    $query .= "  email";
    $query .= ") VALUES (";
    $query .= "   '{$email}'";
    $query .= ")";
    $result = mysqli_query($connection, $query);
    if($result){
        
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

$bodyContent = '<h1>Mail from Abhinay Raj</h1>';
$bodyContent .= '<p>Finaly Now I can send mail <b>offline</b></p>';

$mail->Subject = 'Email from Abhinay raj';
$mail->Body = "<h2> Thanks for Subscribing me</h2> <br/>don't mind Website is in progress, Soon it will be updated<br/> you can follow me  
<a href='http://abhinayraj.tk'>HERE!</a>";
if(!$mail->send()) {
    redirect_to("../index.php");
    
} else {
      redirect_to("../index.php");
	
}
   

}
}
 mysqli_close($connection);
?>