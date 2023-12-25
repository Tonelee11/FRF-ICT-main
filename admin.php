<?php
  require "header.php";
  //require "connection.php";
  session_start();

  if(isset($_POST['upload'])){
    $filename=$_FILES['upload']['name'];
    $tempname=$_FILES['upload']['name'];
    $folder="/images/".$filename;
    
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
  
      <img id="profileImage" src="/image/<?php echo $filename; ?>" alt="Profile Picture">

    </div>
    <h1>hi <?php   echo $_SESSION['admin_user'];?></h1>
    <!-- Hidden file input for profile picture upload -->
    <input type="file" id="fileInput" nam="upload" class="upload-input" onchange="updateProfilePicture(event)" style="display: none"> 
    
  </form>
   

    <div class="buttons">
      <form action="" method="post"></form>
      <a href="#" class="dashboard-btn" onclick="showRegisterForm()">Register User</a>
      <a href="#" class="dashboard-btn">View All Users</a>
      <a href="logout.php" class="dashboard-btn">Logout</a>
      
    </div>
  </div>


<!-- Right Column: Content Container -->

<div class="right-column">

    <!-- Register User Form -->
   
    <div class="register-form" id="registerForm">
      <div> <h3>Register new user</h3></div>
      <form action="register.php" method="post">
        <div class="form-field">
          <label for="chief officer ">chef officer username:</label>
          <input type="text" id="fullName" name="Cuname" placeholder="Full Name" required>
        </div>
      
        <div class="form-field">
          <label for="password">Password:</label>
          <input type="password" id="password1" name="Cpswd" placeholder="password" required>
        </div>
        <span id="message"></span>
        <div class="form-field">
          <label for="Ccheckno">Ccheckno:</label>
          <input type="text" id="Ccheckno" name="Ccheckno" placeholder="checkno" required>
        </div>
        <button type="submit" id="submit" onclick="submitRegisterForm()" name="register">register</button>
      </div>
    </form>

</div>

    <!-- display all users table -->
    <div class="showUsers">
      <table border='2' align=center >
        <tr>
          <th colspan="4"><h2>All Users Information : </h2></th>
        </tr>
          <tr>
          <th>Username</th>
          <th>user type</th>
          <th>chechno</th>
        </tr>
        <tr id="data">

        </tr>
    </div>


    <!-- Javascript for left side column -->

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

    <!-- Javascript for right side column -->

    <script>
    function showRegisterForm() {
      document.getElementById('registerForm').style.display = 'block';
      document.getElementById('allUsers').style.display = 'none';
    }

    
    function showAllUsers() {
      document.getElementById('registerForm').style.display = 'none';
      document.getElementById('allUsers').style.display = 'block';
    }

    function submitRegisterForm() {
      // Implement your form submission logic here
      let password1 = document.getElementById("password1").value;
      let password2 = document.getElementById("password2").value;

      if(password1!==pasword2){
        document.getElementById("message").innerHTML = "Passwords do not match.";
      }else {
        
      }
      
    }

    function showUsers(){
     document.querySelector(".showUsers").style.display = "table";
    }
  </script>


