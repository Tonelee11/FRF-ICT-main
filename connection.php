<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    $conn=mysqli_connect("localhost","mosey","1234","FRF-ICT");
    if(!$conn){
        echo "Error:".mysqli_error($conn);
    }
