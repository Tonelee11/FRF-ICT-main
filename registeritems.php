<?php
    require "header.php";
    require "navheader.php";

 ?>

<center>
    <!-- <h1>Register items</h1> -->
    <Form method="get" action="itemregister.php">
        <h4>Register items</h4>
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
