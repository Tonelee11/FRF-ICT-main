<?php
  require "header.php";
?>

<!-- LOGIN FORM -->

<center>
<form method="post" action="login.php">
    <div class="heading">
      <h3>Login to your account</h3>
    </div>

      <div class="form-group">
        <label for="username" class="label">Username</label>
          <input type="text" name="username" id="username" class="form-control" value=""
          placeholder="Username" autocomplete="username">
      </div>

      <div class="form-group">
        <label for="password" class="label">Password</label>
          <input type="password" name="password" id="password" value="" class="form-control" placeholder="Password" autocomplete="current-password">
      </div>

      <div class="custom-checkbox">
        <a class="fgtpassword" href="#">Forgot Password?</a>
      </div>
      
      <span id="incorrect"></span>
      <span id="fill"></span>
  <input type="submit" class="btn-login" id="loginbtn" value="login" name="loginbtn"> 
  </form>
</center>


<!-- END OF LOGIN FORM -->
<!------------------------------------------------------------------------------------------------------------------->

</body>
</html>