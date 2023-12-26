<?php
    // require "header.php";
    require "leftnav.php";

?>

<div class="right-column">
    <div class="register-form" id="registerForm">
        <div> <h3>Register new user</h3></div>
        <form action="register.php" method="post">
            <div class="form-field">
                <label for="chief officer ">chef officer username:</label>
                <input type="text" id="fullName" name="Cuname" placeholder="Full Name" required>
            </div>
            
            <div class="form-field">
                <label for="password">Password:</label>
                <input type="password" id="password1" name="Cpswd" placeholder="password" required>
            </div>
            <span id="message"></span>
            <div class="form-field">
                <label for="Ccheckno">Ccheckno:</label>
                <input type="text" id="Ccheckno" name="Ccheckno" placeholder="checkno" required>
            </div>
            <button type="submit" id="submit" onclick="submitRegisterForm()" name="register">register</button>
            </div>
        </form>
    </div>
</div>

<script> 
    function showRegisterForm() {
        // event.preventDefault()
        document.getElementById('registerForm').style.display = 'block'
        document.getElementById('allUsers').style.display = 'none';
    }
</script>