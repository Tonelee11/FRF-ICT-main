<?php
    require "connection.php";

    session_start();

    function getAdminByUsernameAndPassword($conn, $username, $password) {
        $sql = "SELECT * FROM Admin WHERE Auname = ? AND Apswd = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        return $stmt->get_result();
    }

    function getChiefIctOfficerByUsernameAndPassword($conn, $username, $password) {
        $password = crc32($password);
        $sql = "SELECT * FROM ChiefIctOfficer WHERE Cuname = ? AND Cpswd = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        return $stmt->get_result();
    }

    function getIctStaffByUsernameAndPassword($conn, $username, $password) {
        $password = crc32($password);
        $sql = "SELECT * FROM ICTStaff WHERE Suname = ? AND Spwd = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        return $stmt->get_result();
    }

    if (isset($_POST['loginbtn'])) {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        if ($username !== "" && $password !== "") {
            $admin = getAdminByUsernameAndPassword($conn, $username, $password);
            $chiefIctOfficer = getChiefIctOfficerByUsernameAndPassword($conn, $username, $password);
            $ictStaff = getIctStaffByUsernameAndPassword($conn, $username, $password);

            if ($admin->num_rows == 1) {
                $_SESSION['admin_user'] = $username;
                header("location:admin.php");
                exit;
            } elseif ($chiefIctOfficer->num_rows == 1) {
                // Chief ICT Officer page
                header("location:chiefdashboard.php");
                exit;
            } elseif ($ictStaff->num_rows == 1) {
                // ICT Staff page
                header("location:staffdashboard.php");
                exit;
            } else {
                $message = "<script>alert('Incorrect username or password')</script>";
                header("location:index.php?msg={$message}");
                exit;
            }
        } else {
            $message = urlencode('<script>alert("Please fill both fields")</script>');
            header("location:index.php?msg={$message}");
            exit;
        }
    }
