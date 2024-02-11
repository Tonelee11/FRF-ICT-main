<?php
    
    require "header.php";
    require "navheader.php";
?>
<center>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
     <h2>Change Password</h2>
    
        <label for="currentPassword">Current Password:</label>
        <input type="password" id="currentPassword" placeholder="Current Password" name="currentPassword" required>
        <span class="error">
            <?php echo $currentPasswordErr;?>
        </span><br>

        <label for="newPassword">New Password:</label>
        <input type="password" id="newPassword" name="newPassword" placeholder="Enter new password" required>
        <span class="error">
            <?php echo $newPasswordErr;?>
        </span><br>
        
        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Enter New Password" required>
        <span class="error">
            <?php echo $confirmPasswordErr;?>
        </span><br>
        
        <br>
        <button type="submit"  name="change_password">Change Password</button>
    </form>
</center>
<?php


// // Check if logged in and IT officer
// if (!isset($_SESSION['loggedin']) || $_SESSION['role'] !== 'it_officer') {
//     header("Location: index.php");
//     exit();
// }

// // Define variables and initialize errors
// $username = $_SESSION['username'];
// $currentPassword = $newPassword = $confirmPassword = "";
// $currentPasswordErr = $newPasswordErr = $confirmPasswordErr = "";

// // Handle form submission
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
//     // Sanitize inputs
//     $username = sanitize_input($_POST["username"]);
//     $currentPassword = sanitize_input($_POST["currentPassword"]);
//     $newPassword = sanitize_input($_POST["newPassword"]);
//     $confirmPassword = sanitize_input($_POST["confirmPassword"]);
    
//     // Validate current password
//     if (empty($currentPassword)) {
//         $currentPasswordErr = "Current password is required.";
//     } else {
//         // Fetch hashed password from database
//         $sql = "SELECT password FROM users WHERE username=?";
//         $stmt = $conn->prepare($sql);
//         $stmt->bind_param("s", $username);
//         $stmt->execute();
//         $result = $stmt->get_result();
        
//         if ($result->num_rows === 1) {
//             $row = $result->fetch_assoc();
//             if (!password_verify($currentPassword, $row["password"])) {
//                 $currentPasswordErr = "Invalid current password.";
//             }
//         } else {
//             $currentPasswordErr = "Error fetching user data.";
//         }
        
//         $stmt->close();
//     }
    
//     // Validate new password
//     if (empty($newPassword)) {
//         $newPasswordErr = "New password is required.";
//     } elseif (strlen($newPassword) < 8) {
//         $newPasswordErr = "New password must be at least 8 characters.";
//     }
    
//     // Validate confirm password
//     if (empty($confirmPassword)) {
//         $confirmPasswordErr = "Confirm password is required.";
//     } elseif ($confirmPassword !== $newPassword) {
//         $confirmPasswordErr = "Passwords do not match.";
//     }
    
//     // Update password if no errors
//     if (empty($currentPasswordErr) && empty($newPasswordErr) && empty($confirmPasswordErr)) {
        
//         // Hash new password
//         $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
        
//         // Update password in database
//         $sql = "UPDATE users SET password=? WHERE username=?";
//         $stmt = $conn->prepare($sql);
//         $stmt->bind_param("ss", $hashedPassword, $username);
        
//         if ($stmt->execute()) {
//             echo "Password changed successfully!";
//         } else {
//             echo "Error updating password: " . $conn->error;
//         }
        
//         $stmt->close();
//     }
// }

// function sanitize_input($data) {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }

?>



