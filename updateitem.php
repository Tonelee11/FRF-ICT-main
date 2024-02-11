<?php
    require "header.php";
    require "navheader.php";

 ?>

<center>
    <!-- <h1>Register items</h1> -->
    <Form method="get" action="itemregister.php">
        <h4>update items</h4>
        <?php
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
        
                $stmt = $conn->prepare("UPDATE items 
                SET IRegion = ?, 
                    IDepartment = ?, 
                    IType = ?, 
                    Ibrand = ?, 
                    Imodel = ?, 
                    IserialNo = ?, 
                    Imemory = ?, 
                    ImsOffice = ?, 
                    IAntivirus = ?, 
                    IotherSoftware = ?, 
                    IAquistionDate = ?, 
                    IAquistiontype = ?, 
                    ICCondition = ?, 
                    IRegisterDate = ? 
                WHERE IserialNo = ?");

                if ($stmt) {
                $stmt->bind_param("ssssssssssssssi", $region, $department, $type, $brand, $model, $serialNo, $memory, $Imsoffice, $antivirus, $othersoftwares, $IAdate, $IAtype, $iccondition, $Iregdate, $itemId);

                if ($stmt->execute()) {
                echo "Data inserted successfully";
                } else {
                echo "Error: " . htmlspecialchars($stmt->error); // Print the error message for debugging
                exit;
                }

                $stmt->close();
                } else {
                echo "Error preparing statement: " . htmlspecialchars($conn->error); // Print the error message for debugging
                exit;
                }
            }
        
        ?>
        <input type="text" placeholder="region" name="region">
        <input type="text" placeholder="Department" name="department">
        <input type="text" placeholder="staff check number" name="type">
        <input type="text" placeholder="brand" name="brand">
        <input type="text" placeholder="model" name="Imodel">
        <input type="text" placeholder="serial number" name="serialNo">
        <input type="text" placeholder="memory" name="memory">
        <input type="text" placeholder="Ims office" name="Imsoffice">
        <input type="text" placeholder="antivirus" name="antivirus">
        <input type="text" placeholder="other softwares" name="othersoftwares">
        <input type="text" placeholder="item aquisition date" name="IAdate">
        <input type="text" placeholder="item aquisition type" name="IAtype">
        <input type="text" placeholder="item condition" name="iccondition">
        <input type="text" placeholder="register date" name="Iregdate">
        <input type="submit" value="register" name="register">
    </Form>
</center>
