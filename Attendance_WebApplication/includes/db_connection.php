<?php
    define("DB_SERVER", "sql313.888webhost.com");
    define("DB_USER", "888we_21419398");
    define("DB_PASS", "abhinayraj9755");
    define("DB_NAME", "888we_21419398_abhinayraj");

// CREATE DATABASE CONNECTION

    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    if(mysqli_connect_errno()){
        die("datbase connection failed: " .
            mysqli_connect_error() .
            " (" . mysqli_connect_errno() . ")"
           );
    }
?>
