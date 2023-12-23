<?php
  require "header.php";
  //require "connection.php";
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
  
      <img id="profileImage" src="/image/<?php echo $filename; ?>"> 
  </div> 
    <h1>hi <?php  // echo $_SESSION['admin_user'];?></h1>
    <!-- Hidden file input for profile picture upload -->
    <input type="file" id="fileInput" nam="upload" class="upload-input" onchange="updateProfilePicture(event)" style="display: none"> 
    
  </form>
   

    <div class="buttons">
      <a href="#" class="dashboard-btn" onclick="showRegisterForm()">Register User</a>
      <a href="#" class="dashboard-btn" onclick="showAllUsers()()">View All Users</a>
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




 
 <!-- You will set this clear on your own -->


 <!-- All Users Table --> 
 <?php
    
    //Connect to the database
    //$conn=mysqli_connect("localhost","mosey","1234","FRF-ICT");
    
    //Query the database to retrieve all rider details
    //$query = "SELECT * FROM FRF-ICT";
    //$result = mysqli_query($conn, $sql);
    
    //Display the rider details in a table
    // if (mysqli_num_rows($result) > 0) {
     //   echo "<table>";
     //   echo "<tr>
      //  <th>Full Name</th>
      //  <th>Department</th>
      //  <th>Gender</th>
      //  <th>Phone Number</th>
      //  <th>Email</th>
      //  <th>Action</th>
      //  <th>Action</th>
      //  </tr>";
      //  while($row = mysqli_fetch_array($result)) {
      //  echo "<tr><td>" . $row["Full Name"] . "</td><td>" . $row["Department"] . "</td><td>" . $row["Gender"] . "</td><td>" . $row["Phone Number"] . "</td><td>". $row["Email"] . "</td><td>"."</td><td>"."</td><td>"."<a href='admin.php?id=". $row["Email"]."' onclick=\"return confirm('Are you sure you want to delete this rider? -> refresh after deletion!')\"><b>Delete</b></a>"."</td><td>" . "<b><a href='update-user.php?id=". $row["Email"] ."'>Edit</a></b>"."</td></tr>";
      //  }
      //  echo "</table>";
      //  echo "</div>";
    //}

    // Check if the rider's email address is provided in the URL
   // if (isset($_GET['id'])) {
   //     $email = $_GET['id'];
    
    // Delete the rider's details from the database
      //  $query = "DELETE FROM FRF-ICT WHERE Email='$email'";
      // $result=mysqli_query($conn, $sql);
   // }
    
?>
 
 
 <div class="all-users" id="allUsers">
      <table>
        <thead>
          <tr>
            <th>Full Name</th>
            <th>Department</th>
            <th>Gender</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <!-- Sample user data -->
          <tr>
            <td>Anthony charles</td>
            <td>IT</td>
            <td>Male</td>
            <td>0776554367</td>
            <td>misondo@gmail.com</td>
            <td><button class="edit-btn">Edit</button>
            <button class="remove-btn" >Remove</button></td>
          </tr>
        </tbody>
      </table>
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
  

    //-- Javascript for right side column on register & view all users button 

    
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
      alert('Register form submitted!');
    }

  </script>


