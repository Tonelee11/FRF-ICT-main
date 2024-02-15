<?php
    require "header.php";
    // require "navheader.php";
    require "connection.php";

 ?>

<center>
    <!-- <h1>Register items</h1> -->
    <Form method="get" action="itemregister.php">
        <h4>User Registration</h4>
        <input type="text" placeholder="username" name="username">
        <input type="text" placeholder="password" name="password">
        <input type="text" placeholder="staff check number" name="type">
      
        <input type="submit" value="User" name="User">
     
</center>
