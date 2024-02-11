<?php
    require "header.php";
    require "chiefheader.php";
?>


    <div class="container">
        <center>
            <h1>Registered Items</h1>
            <div id="itemContainer" class="item"></div>
        </center>
    </div>

    <script>
        const itemContainer = document.getElementById('itemContainer');

        <?php
        require "connection.php";

        $sql = $conn->query("select * from items");

        if ($sql) {
          while ($result = $sql->fetch_assoc()) {
            echo "itemContainer.innerHTML += '{$result['Ibrand']}<br>';";
          }
        }
        ?>
    </script>
</body>
</html>