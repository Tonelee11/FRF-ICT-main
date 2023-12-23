<?php
    require "connection.php";

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    session_start();

if (isset($_POST['loginbtn'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if ($username !== "" && $password !== "") {
        $sql = "SELECT * FROM Admin WHERE Auname=? AND Apswd=?";
        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ss", $username, $password);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $rowCount = mysqli_num_rows($result);

            if ($rowCount == 1) {
                $_SESSION['admin_user'] = $username;
                header("location:admin.php");
            } else {
                $message = urlencode('<script>alert("username or password is incorrect")</script>');
                header("location:index.php?msg={$message}");
            }
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        $message = urlencode('<script>alert("please fill both fields")</script>');
        header("location:index.php?msg={$message}");
    }
}
?>
