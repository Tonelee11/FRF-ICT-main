<?php
require "header.php";
?>

<div class="admin-dashboard">
<!-- Left Column: Profile Picture and Buttons -->
<div class="left-column">
    <div class="profile" onclick="document.getElementById('fileInput').click()">
      <img id="profileImage" src="path/to/your/profile-picture.jpg" alt="Profile Picture">
    </div>

    <!-- Hidden file input for profile picture upload -->
    <input type="file" id="fileInput" class="upload-input" onchange="updateProfilePicture(event)" style="display: none">

    <div class="buttons">
      <a href="#" class="dashboard-btn">Register User</a>
      <a href="#" class="dashboard-btn">View All Users</a>
      <a href="#" class="dashboard-btn">Logout</a>
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