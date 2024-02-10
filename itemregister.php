<?php
    require "connection.php";
    if (isset($_GET['register'])) {
        $region = $_GET['region'];    
        $department = $_GET['department'];
        $type = $_GET['type'];
        $brand = $_GET['brand'];
        $model = $_GET['Imodel'];
        $serialNo = $_GET['serialNo'];
        $memory = $_GET['memory'];
        $Imsoffice = $_GET['Imsoffice'];
        $antivirus = $_GET['antivirus'];
        $othersoftwares = $_GET['othersoftwares'];
        $IAdate = $_GET['IAdate'];
        $IAtype = $_GET['IAtype'];
        $iccondition = $_GET['iccondition'];
        $Iregdate = $_GET['Iregdate'];

        $stmt = $conn->prepare("INSERT INTO items (IRegion, IDepartment, IType, Ibrand, Imodel, IserialNo, Imemory, ImsOffice, IAntivirus, IotherSoftware, IAquistionDate, IAquistiontype, ICCondition, IRegisterDate) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        if ($stmt) {
            $stmt->bind_param("ssssssssssssss", $region, $department, $type, $brand, $model, $serialNo, $memory, $Imsoffice, $antivirus, $othersoftwares, $IAdate, $IAtype, $iccondition, $Iregdate);

            if ($stmt->execute()) {
                echo "Data inserted successfully";
            } else {
                echo "Error: " . $stmt->error; // Print the error message for debugging
            }

            $stmt->close();
        } else {
            echo "Error preparing statement: " . $conn->error; // Print the error message for debugging
        }
    }
