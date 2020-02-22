 <?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/function.php"); ?>
<?php
$time = date("H");
if ($time == "09"){
    echo "yes!";
    $sql = "INSERT INTO attendance (rfid_no) VALUES('7858826816');";  //Abhinay Raj
    $sql .= "INSERT INTO attendance (rfid_no) VALUES('2512311153');";  //srajan
    $sql .= "INSERT INTO attendance (rfid_no) VALUES('271277153');";// Aritra
    $sql .= "INSERT INTO attendance (rfid_no) VALUES('696625269');";// Avinash
    $sql .= "INSERT INTO attendance (rfid_no) VALUES('20360251102');";// Abhishek
    $sql .= "INSERT INTO attendance (rfid_no) VALUES('987654321');";// Gaurav
    $sql .= "INSERT INTO attendance (rfid_no) VALUES('27140244102');";// Arman
    $sql .= "INSERT INTO attendance (rfid_no) VALUES('2810118233');";// Devesh
   $sql .= "INSERT INTO attendance (rfid_no) VALUES('974984568734');";// Arman
    $sql .= "INSERT INTO attendance (rfid_no) VALUES('89763876579');";// Devesh
    $result = mysqli_multi_query($connection, $sql) or die('Errant query:  '.$sql);
        if($result) {
            echo "Added successfully";
                }
            

}else{
    echo "sosdcrry";
}

   $connection->close(); 
?>	