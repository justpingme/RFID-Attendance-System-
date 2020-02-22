<?php

class rfid {
    public $link='';
    function __construct($allow, $id) {
        $this->connect();
        $this->storeInDB($allow, $id);
    }
    function connect() {
        $mysqli = mysqli_connect('sql313.888webhost.com','888we_21419398','abhinayraj9755','888we_21419398_abhinayraj') or die($mysqli->error);
        $this->link = mysqli_connect('sql313.888webhost.com','888we_21419398','abhinayraj9755','888we_21419398_abhinayraj') or die('Cannot connect to the DB');
        mysqli_select_db($mysqli, '888we_21419398_abhinayraj') or die('Cannot select the DB');
    }
    function storeInDB($allow, $id) {
        $mysqli = mysqli_connect('sql313.888webhost.com','888we_21419398','abhinayraj9755','888we_21419398_abhinayraj') or die($mysqli->error);
        $day = date("l");
        $time = date("H");
        if ($day == "Monday"){
                
            if (($time == "09") || ($time == "10")){
                $query = "UPDATE attendance set java='".$allow."' WHERE rfid_no='$id' AND DATE(date)= CURDATE() ";
                }
                elseif (($time == "10")|| ($time == "11")){
                $query = "UPDATE attendance set linuxlab='".$allow."' WHERE rfid_no='$id' AND DATE(date)= CURDATE() ";
                }
                elseif (($time == "11")|| ($time == "12")){
                $query = "UPDATE attendance set dsinc='".$allow."' WHERE rfid_no='$id' AND DATE(date)= CURDATE() ";
                }
                elseif (($time == "02")|| ($time == "03")){
                $query = "UPDATE attendance set javalab='".$allow."' WHERE rfid_no='$id' AND DATE(date)= CURDATE() ";
                }
                elseif (($time == "03")|| ($time == "04")){
                $query = "UPDATE attendance set os='".$allow."' WHERE rfid_no='$id' AND DATE(date)= CURDATE() ";
                }
                elseif (($time == "04")|| ($time == "05")){
                $query = "UPDATE attendance set pe='".$allow."' WHERE rfid_no='$id' AND DATE(date)= CURDATE() ";
                }
                
            else{
                    $query = "INSERT INTO late ('allow' , 'rfid_no') VALUE ('$allow', '$id') ";
                
        }
        }elseif($day == "Tuesday"){
            if (($time == "09") || ($time == "10")){
                $query = "UPDATE attendance set dslab='".$allow."' WHERE rfid_no='$id' AND DATE(date)= CURDATE() ";
                }
                elseif (($time == "10")|| ($time == "11")){
                $query = "UPDATE attendance set linuxlab='".$allow."' WHERE rfid_no='$id' AND DATE(date)= CURDATE() ";
                }
                elseif (($time == "11")|| ($time == "12")){
                $query = "UPDATE attendance set os='".$allow."' WHERE rfid_no='$id' AND DATE(date)= CURDATE() ";
                }
                elseif (($time == "02")|| ($time == "03")){
                $query = "UPDATE attendance set pe='".$allow."' WHERE rfid_no='$id' AND DATE(date)= CURDATE() ";
                }
                elseif (($time == "03")|| ($time == "04")){
                $query = "UPDATE attendance set java='".$allow."' WHERE rfid_no='$id' AND DATE(date)= CURDATE() ";
                }
                elseif (($time == "04")|| ($time == "05")){
                $query = "UPDATE attendance set dsinc='".$allow."' WHERE rfid_no='$id' AND DATE(date)= CURDATE() ";
                }
                
        else{
                    $query = "INSERT INTO late ('allow' , 'rfid_no') VALUE ('$allow', '$id') ";
                }
        }
                
                elseif($day == "Wednesday"){
                if (($time == "09") || ($time == "10")){
                $query = "UPDATE attendance set java='".$allow."' WHERE rfid_no='$id' AND DATE(date)= CURDATE() ";
                }
                elseif (($time == "10")|| ($time == "11")){
                $query = "UPDATE attendance set dsinc='".$allow."' WHERE rfid_no='$id' AND DATE(date)= CURDATE() ";
                }
                elseif (($time == "11")|| ($time == "12")){
                $query = "UPDATE attendance set dslab='".$allow."' WHERE rfid_no='$id' AND DATE(date)= CURDATE() ";
                }
                elseif (($time == "02")|| ($time == "03")){
                $query = "UPDATE attendance set pe='".$allow."' WHERE rfid_no='$id' AND DATE(date)= CURDATE() ";
                }
                elseif (($time == "03")|| ($time == "04")){
                $query = "UPDATE attendance set os='".$allow."' WHERE rfid_no='$id' AND DATE(date)= CURDATE() ";
                }
                elseif (($time == "04")|| ($time == "05")){
                $query = "UPDATE attendance set linuxlab='".$allow."' WHERE rfid_no='$id' AND DATE(date)= CURDATE() ";
                }
                
            else{
                    $query = "INSERT INTO late ('allow' , 'rfid_no') VALUE ('$allow', '$id') ";
                }
                }
            elseif($day == "Thursday"){
            if (($time == "09") || ($time == "10")){
                $query = "UPDATE attendance set dsinc='".$allow."' WHERE rfid_no='$id' AND DATE(date)= CURDATE() ";
                }
                elseif (($time == "10")|| ($time == "11")){
                $query = "UPDATE attendance set linuxlab='".$allow."' WHERE rfid_no='$id' AND DATE(date)= CURDATE() ";
                }
                elseif (($time == "11")|| ($time == "12")){
                $query = "UPDATE attendance set linuxlab='".$allow."' WHERE rfid_no='$id' AND DATE(date)= CURDATE() ";
                }
                elseif (($time == "02")|| ($time == "03")){
                $query = "UPDATE attendance set javalab='".$allow."' WHERE rfid_no='$id' AND DATE(date)= CURDATE() ";
                }
                elseif (($time == "03")|| ($time == "04")){
                $query = "UPDATE attendance set os='".$allow."' WHERE rfid_no='$id' AND DATE(date)= CURDATE() ";
                }
                elseif (($time == "04")|| ($time == "05")){
                $query = "UPDATE attendance set pe='".$allow."' WHERE rfid_no='$id' AND DATE(date)= CURDATE() ";
                }
                
            else{
                    $query = "INSERT INTO late ('allow' , 'rfid_no') VALUE ('$allow', '$id') ";
}
            }
        elseif($day == "Friday"){
            if (($time == "09") || ($time == "10")){
                $query = "UPDATE attendance set pe='".$allow."' WHERE rfid_no='$id' AND DATE(date)= CURDATE() ";
                }
                elseif (($time == "10")|| ($time == "11")){
                $query = "UPDATE attendance set pe='".$allow."' WHERE rfid_no='$id' AND DATE(date)= CURDATE() ";
                }
                elseif (($time == "11")|| ($time == "12")){
                $query = "UPDATE attendance set os='".$allow."' WHERE rfid_no='$id' AND DATE(date)= CURDATE() ";
                }
                elseif (($time == "02")|| ($time == "03")){
                $query = "UPDATE attendance set os='".$allow."' WHERE rfid_no='$id' AND DATE(date)= CURDATE() ";
                }
                
        else{
                    $query = "INSERT INTO late ('allow' , 'rfid_no') VALUE ('$allow', '$id') ";
        }
        }
        elseif($day == "Saturday"){
            if (($time == "09") || ($time == "10")){
                $query = "UPDATE attendance set java='".$allow."' WHERE rfid_no='$id' AND DATE(date)= CURDATE() ";
                }
                elseif (($time == "10")|| ($time == "11")){
                $query = "UPDATE attendance set linux='".$allow."' WHERE rfid_no='$id' AND DATE(date)= CURDATE() ";
                }
                elseif (($time == "11")|| ($time == "12")){
                $query = "UPDATE attendance set dsinc='".$allow."' WHERE rfid_no='$id' AND DATE(date)= CURDATE() ";
                }
                elseif (($time == "02")|| ($time == "03")){
                $query = "UPDATE attendance set javalab='".$allow."' WHERE rfid_no='$id' AND DATE(date)= CURDATE() ";
                }
                elseif (($time == "03")|| ($time == "04")){
                $query = "UPDATE attendance set os='".$allow."' WHERE rfid_no='$id' AND DATE(date)= CURDATE() ";
                }
                elseif (($time == "04")|| ($time == "05")){
                $query = "UPDATE attendance set pe='".$allow."' WHERE rfid_no='$id' AND DATE(date)= CURDATE() ";
                }
                
        else{
                    $query = "INSERT INTO late ('allow' , 'rfid_no') VALUE ('$allow', '$id') ";
                
        }
        }
            
        
        $result = mysqli_query($mysqli, $query) or die('Errant query:  '.$query);
        if($result) {
            echo "Added successfully";
                }
            }
    
}

if($_GET['allow'] != '' and $_GET['id'] != '') {
    $rfid=new rfid($_GET['allow'],$_GET['id']);
}
?>
    