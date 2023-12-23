
function validateForm() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    // You can replace the following condition with your authentication logic
    if (username === "username" && password === "password") {
        // Successful login
        document.getElementById("error-message").style.display = "none";
        alert("Login successful!");
        return true;
    } else {
        // Incorrect login
        document.getElementById("error-message").style.display = "block";
        return false;
    }
}

