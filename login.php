<?php
    require "connection.php";


    session_start();

if (isset($_POST['loginbtn'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if ($username !== "" && $password !== "") {
        $sql = "SELECT * FROM Admin WHERE Auname = '$username' AND Apswd = CRC32($password)";
        $stmt = mysqli_query($conn, $sql);
        $ChiefIctOfficer=mysqli_query($conn,"SELECT * FROM ChiefIctOfficer WHERE Cuname = '$username' AND Cpswd = CRC32('$password')");

        $ICTStaff=mysqli_query($conn,"SELECT * FROM ICTStaff WHERE Suname = '$username' AND Spwd = CRC32('$password')");

        if ($stmt) {
            $rowCount = mysqli_num_rows($stmt);


            if ($rowCount == 1) {
                $_SESSION['admin_user'] = $username;
                header("location:admin.php");
            } else {
                $message = "<script>
                var error = document.getElementById('incorrect').innerHTML='incorrect password'</script>";
                // header("location:index.php?msg={$message}");
                echo $message;
            }
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        $message = urlencode('<script>alert("please fill both fields")</script>');
        header("location:index.php?msg={$message}");
    }
     
    if($ICTStaff){
        //chief ict staff page
        $rowCount = mysqli_num_rows($ICTStaff);
        if ($rowCount == 1) {
            $_SESSION['staff'] = $username;
            header("location:staffdashboard.php");
        } else {
            $message = "<script>
            var error = document.getElementById('incorrect').innerHTML='incorrect password'</script>";
            // header("location:index.php?msg={$message}");
            echo $message;
        }
    
    }else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
     
    if($ChiefIctOfficer){
        //chief ict officer page
        $rowCount = mysqli_num_rows($ChiefIctOfficer);

        if ($rowCount == 1) {
            $_SESSION['chief'] = $username;
            header("location:chiefdashboard.php");
            
        } else {
            $message = "<script>
            var error = document.getElementById('incorrect').innerHTML='incorrect password'</script>";
            // header("location:index.php?msg={$message}");
            echo $message;
        }
        
    }
}
?>
