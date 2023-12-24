<?php
    require "connection.php";

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    if(isset($_POST['register'])){
        $username = $_POST["Cuname"];
        $password= $_POST['Cpswd'];
        $Ccheckno= $_POST['Ccheckno'];

        if($username && $password && $Ccheckno!==""){
            $query="insert into ChiefIctOfficer values('$username',CRC32('$password'),'$Ccheckno')";
            $insert=mysqli_query($conn,$query);
            if($insert){
                echo "<script>alert('registration successfully')<script/>";
                header("location:admin.php?$_SESSION[admn_user]");
            }
        } else{
            echo "<script>alert('All fields are required.')<script/>";
            exit();
        }       
        
    }
?>