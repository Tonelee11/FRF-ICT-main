<?php
    //function to connect database
    function conn(){
        $conn=mysqli_connect("localhost","mosey","1234","FRF-ICT");
    }

    //function to select data form database
    function register(){

    }

    //function to select
    function login(){
        $sql=mysqli_query(conn(),"select * from admin where Auname='$usename' and Apswd'$password'");
        if($sql){
            header("location:admin.php");
        }
    }
     
    //

   
        function validateForm() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            // You can replace the following condition with your authentication logic
            if (username === "username" && password === "password") {
                // Successful login
                document.getElementById("error-message").style.display = "none";
                alert("Login successful!");
                return true;
            } else {
                // Incorrect login
                document.getElementById("error-message").style.display = "block";
                return false;
            }
        }
    

?>


