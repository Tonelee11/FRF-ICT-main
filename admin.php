<?php
  require "header.php";
  require "connection.php";
  session_start();

  if(isset($_POST['upload'])){
    $filename=$_FILES['upload']['name'];
    $tempname=$_FILES['upload']['name'];
    $folder="/images".$filenae;
    
    $adminUsername = $_SESSION['admin_user'];
    // $filename = 'new_image.jpg';

    $query = "UPDATE Admin SET image = :filename WHERE Auname = :adminUsername";

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
      <a href="#" class="dashboard-btn">Register User</a>
      <a href="#" class="dashboard-btn">View All Users</a>
      <a href="logout.php" class="dashboard-btn">Logout</a>
      
    </div>
  </div>
</div>

<script>
    function updateProfilePicture(event) {
      const fileInput = event.target;
      const profileImage = document.getElementById('profileImage');

      const file = fileInput.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
          profileImage.src = e.target.result;
        };
        reader.readAsDataURL(file);
      }
    }
  </script>