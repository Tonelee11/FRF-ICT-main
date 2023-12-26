<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    // require "header.php";
    require "leftnav.php";
    require "connection.php";

    // if(isset($_POST['viewusers'])){
        $sql = 'SELECT * FROM ChiefIctOfficer';
        $query=mysqli_query($conn,$sql);
        if($query){
            echo "<table border='2' align=center >
                <tr>
                    <th colspan='4'><h2><center>All Users Information : </center></h2></th>
                </tr>
                <tr>
                    <th>Username</th>
                    <th>user type</th>
                    <th>chechno</th>
                </tr>";
            while($row=mysqli_fetch_array($query)){
                echo "<tr id='data'>
                    <td>".$row["CUname"]."</td>
                    <td>".//strtoupper($row["usertype"]).
                    "</td>
                    <td>".$row["CCheckno"]."</td>
                </tr>";
            }
            echo "</table>";
        }
    // }
?>