<?php
// Start session
session_start();

// Clear all session data
session_unset();

// Destroy the session
session_destroy();

// Redirect to index.php
header("location:index.php");
exit();
?>