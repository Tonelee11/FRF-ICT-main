<?php
    require "header.php";
    error_reporting(E_ALL);
    error_reporting(1);
    

?>
    <center>
        <form action="functions.php" method="post">
        <h1>login</h1>
        <div class="inputs">
            <label for="username">username</label>
            <input type="text" name="username" id="username"><br>
            <label for="password">password</label>
            <input type="password" name="password" id="password"><br>
        </div>
        <input type="submit" value="login" class="login" name='login'>
        <?php
            require "functions.php";
           

            if(isset($_POST['login'])){
                $username=$_POST['username'];
                $password=$_POST['password'];
                conn( login($username,$password));
                // login($username,$password);
            }
            var_dump(login());

        ?>
        </form>
    </center>
  
</body>
