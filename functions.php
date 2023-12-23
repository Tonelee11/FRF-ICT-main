<?php
    require "connection.php";
    //function to connect database
    function dbconnect(){
        $conn=mysqli_connect("localhost","mosey","1234","FRF-ICT");
        if(!$conn){
            echo "Error:".mysqli_error($conn);
        }
    
    }
    //function to select data form database
    function register(){

    }

    //function to select
    function login(){
        if(isset($_POST['loginbtn'])){
            if(!empty($_POST['username']) && !empty($_POST['password'])){
                $username=mysqli_real_escape_string(dbconnect(), $_POST['username']);
                $password=mysqli_real_escape_string(dbconnect(), $_POST['password']);
                // var_dump($username,$password);
                $sql=mysqli_query(dbconnect(),"select * from admin where Auname = '$username' and Apswd = '$password' ");
    
                
                if(mysqli_num_rows($sql)==1){
                    header("location:admin.php");
                }
            }
           
        }
  
    }
     
    //

   

?>


