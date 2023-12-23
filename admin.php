<?php
  require "header.php";
  require "connection.php";
  session_start();

  if(isset($_POST['upload'])){
    $filename=$_FILES['upload']['name'];
    $tempname=$_FILES['upload']['name'];
    $folder="/images".$filename;
    
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
      <div class="form-field">
        <label for="fullName">Full Name:</label>
        <input type="text" id="fullName" name="fullName" placeholder="Full Name" required>
      </div>
      <div class="form-field">
        <label for="department">Department:</label>
        <input type="text" id="department" name="department" placeholder="Department" required>
      </div>
      <div class="form-field">
        <label for="gender">Gender:</label>
        <input type="text" id="gender" name="gender" placeholder="Gender" required>
      </div>
      <div class="form-field">
        <label for="phoneNumber">Phone Number:</label>
        <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Phone Number" required>
      </div>
      <div class="form-field">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="example@gmail.com" required>
      </div>
      <button onclick="submitRegisterForm()">Submit</button>
    </div>

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
    }

    function submitRegisterForm() {
      // Implement your form submission logic here
      alert('Register form submitted!');
    }
  </script>