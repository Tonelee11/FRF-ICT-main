<?php
  require "header.php";
  require "connection.php";
  
  session_start();
  if(!isset($_SESSION['admin_user'])){
    header("location:index.php");
  }
  if(isset($_POST['upload'])){
    $filename=$_FILES['upload']['name'];
    $tempname=$_FILES['upload']['name'];
    $folder="images/".$filename;
    
    $adminUsername = $_SESSION['admin_user'];
    // $filename = 'new_image.jpg';

    $query = "UPDATE Admin SET image = :filename WHERE Auname=:adminUsername";

    // $sql=mysqli_query($conn,$query);
    // if($sql){
    //   echo "<script>alert('image changed')</script>";
    // }

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':filename', $filename);
    $stmt->bindParam(':adminUsername', $adminUsername);
    $stmt->execute();

    }

?>

<div class="admin-dashboard">

<!-- Left Column: Profile Picture and Buttons -->

<div class="left-column">
  <form action="" method="post">
  <div class="profile" onclick="document.getElementById('fileInput').click()">
  
      <img id="profileImage" src="images/admin.png" alt="Profile Picture">

    </div>
    <h1>hi <?php   echo $_SESSION['admin_user'];?></h1>
    <!-- Hidden file input for profile picture upload -->
    <input type="file" id="fileInput" nam="upload" class="upload-input" onchange="updateProfilePicture(event)" style="display: none"> 
    
  </form>
   

    <div class="buttons">
      <form action="" method="post"></form>
      <a href="registeruser.php" class="dashboard-btn" onclick="showRegisterForm()">Register User</a>
      <a href="viewusers.php" class="dashboard-btn" onclick="showAllUsers()">View All Users</a>
      <a href="logout.php" class="dashboard-btn">Logout</a>
      
    </div>
  </div>
