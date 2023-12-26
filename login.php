<?php
    require "connection.php";


    session_start();

if (isset($_POST['loginbtn'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if ($username !== "" && $password !== "") {
        $sql = "SELECT * FROM Admin WHERE Auname = '$username' AND Apswd = $password";
        $stmt = mysqli_query($conn, $sql);

        if ($stmt) {
            // mysqli_stmt_bind_param($stmt, "ss", $username, $password);
            // mysqli_stmt_execute($stmt);
            // $result = mysqli_stmt_get_result($stmt);
            // $rowCount = mysqli_num_rows($result);


            // if ($rowCount == 1) {
                $_SESSION['admin_user'] = $username;
                header("location:admin.php");
            // } else {
            //     $message = "<script>
            //     var error = document.getElementById('incorrect').innerHTML='incorrect password'</script>";
            //     // header("location:index.php?msg={$message}");
            //     echo $message;
            // }
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        $message = urlencode('<script>alert("please fill both fields")</script>');
        header("location:index.php?msg={$message}");
    }
}
?>
