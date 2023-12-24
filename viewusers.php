<?php
    require "connection.php";

    if(isset($_POST['viewusers'])){
        $sql = 'SELECT * FROM users';
        $query=mysqli_query($conn,$sql);
        
    }
?>