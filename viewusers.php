<?php
    require "connection.php";

    if(isset($_POST['viewusers'])){
        $sql = 'SELECT * FROM chiefIctOfficer';
        $query=mysqli_query($conn,$sql);
        
        if($query){
            while($row=mysqli_fetcha_ssoc($query)){
                echo "<script>
            document.getElementById('viewusers').innerHTML='
            <div class='showUsers'>
            <table border='2' align=center >
              <tr>
                <th colspan='4'><h2>All Users Information : </h2></th>
              </tr>
                <tr>
                <th>Username</th>
                <th>user type</th>
                <th>chechno</th>
              </tr>
              <tr id='data'>
                <td>".$row["username"]."</td>
                <td>".strtoupper($row["usertype"])."</td>
                <td>".$row["checkno"]."</td>
              </tr>
          </div>
      
            '
            <script/>";
            }
          
        }
    }
?>