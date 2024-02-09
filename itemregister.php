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

        $sql = "INSERT INTO items (IRegion, IDepartment, IType, Ibrand,Imodel, IserialNo, Imemory, ImsOffice, antivirus, IotherSoftwares, IAquisitiondate, IAquisitiontype, ICCondition, IRegisterDate)
                VALUES ('$region', '$department', '$type', '$brand',$model, '$serialNo', '$memory', '$Imsoffice', '$antivirus', '$othersoftwares', '$IAdate', '$IAtype', '$iccondition', '$Iregdate')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
?>