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

?>
