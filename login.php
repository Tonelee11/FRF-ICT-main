<?php
    require "header.php";
    error_reporting(E_ALL);
    error_reporting(1);
    

?>

       <?php
            require "function.php";
           

            if(isset($_POST['loginbtn'])){
                $username=$_POST['username'];
                $password=$_POST['password'];
                conn( login($username,$password));
                // login($username,$password);
            }
            var_dump(login());

        ?>
        <!--
        </form>
    </center>
        -->
</body>
