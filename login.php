<?php
    require "connection.php";


    session_start();
    // define($ICTStaff, mysqli_query($conn,"SELECT * from IctStaff where Iuname=? and Ipwd=? ));

if (isset($_POST['loginbtn'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if ($username !== "" && $password !== "") {
        $admin = "SELECT * FROM Admin WHERE Auname = '$username' AND Apswd = '$password'";
        $stmt = mysqli_query($conn, $admin);

        $ChiefIctOfficer=mysqli_query($conn,"SELECT * FROM ChiefIctOfficer WHERE Cuname = '$username' AND Cpswd = '$password'");

        $ICTStaff=mysqli_query($conn,"SELECT * FROM ICTStaff WHERE Suname = '$username' AND Spwd = '$password'");

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
        } 
        
        if($ChiefIctOfficer){
            //chief ict officer page
            $rowCount = mysqli_num_rows($ChiefIctOfficer);

            if ($rowCount == 1) {
                $_SESSION['chief'] = $username;
                header("location:chiefdashboard.php");
                // var_dump($ChiefIctOfficer);
                // die();
            } else {
                $message = "<script>
                var error = document.getElementById('incorrect').innerHTML='incorrect password'</script>";
                header("location:index.php?msg={$message}");
                echo $message;
            }
           
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
                header("location:index.php?msg={$message}");
                echo $message;
            }
           
        }else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        $message = urlencode('<script>alert("please fill both fields")</script>');
        header("location:index.php?msg={$message}");
    }

    // switch ($_POST['loginbtn']) {
    //     case 'ADMIN':
    //         $admin = "SELECT * FROM Admin WHERE Auname = '$username' AND Apswd = '$password'";
    //         $stmt = mysqli_query($conn, $admin);
    //         if ($stmt) {
    //             $rowCount = mysqli_num_rows($stmt);
    //             if ($rowCount == 1) {
    //                 $_SESSION['admin_user'] = $username;
    //                 header("location:admin.php");
                   
    //             } else {
    //                 $message = "<script>
    //                 var error = document.getElementById('incorrect').innerHTML='incorrect password'</script>";
    //                 // header("location:index.php?msg={$message}");
    //                 echo $message;
                    
    //             }
    //         }
    //         break;

    //     case 'staff':
    //         $ICTStaff=mysqli_query($conn,"SELECT * FROM ICTStaff WHERE Suname = '$username' AND Spwd = '$password'");
    //         if($ICTStaff){
    //             //chief ict staff page
    //             $rowCount = mysqli_num_rows($ICTStaff);
    //             if ($rowCount == 1) {
    //                 $_SESSION['staff'] = $username;
    //                 header("location:staffdashboard.php");
    //             } else {
    //                 $message = "<script>
    //                 var error = document.getElementById('incorrect').innerHTML='incorrect password'</script>";
    //                 // header("location:index.php?msg={$message}");
    //                 echo $message;
    //             }
            
    //         }else {
    //             echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    //         }
    //     case 'ChiefIctOfficer':
    //         $ChiefIctOfficer=mysqli_query($conn,"SELECT * FROM ChiefIctOfficer WHERE Cuname = '$username' AND Cpswd = '$password'");

    //         if($ChiefIctOfficer){
    //             //chief ict officer page
    //             $rowCount = mysqli_num_rows($ChiefIctOfficer);
    
    //             if ($rowCount == 1) {
    //                 $_SESSION['chief'] = $username;
    //                 header("location:chiefdashboard.php");
    //                 // var_dump($ChiefIctOfficer);
    //                 // die();
    //             } else {
    //                 $message = "<script>
    //                 var error = document.getElementById('incorrect').innerHTML='incorrect password'</script>";
    //                 // header("location:index.php?msg={$message}");
    //                 echo $message;
    //             }
               
    //         }
        
    //     default:
    //         # code...
    //         break;
    // }
}
?>
