<?php
    $conn=mysqli_connect("localhost","mosey","1234","FRF-ICT");
    if(!$conn){
        echo "Error:".mysqli_error($conn);
    }

?>