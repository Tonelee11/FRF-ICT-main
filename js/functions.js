
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



function updateProfilePicture(event) {
    const fileInput = event.target;
    const profileImage = document.getElementById('profileImage');

    const file = fileInput.files[0];
    if (file) {
    const reader = new FileReader();
    reader.onload = function(e) {
        profileImage.src = e.target.result;
    };
    reader.readAsDataURL(file);
    }
}


//  Javascript for right side column 



function showAllUsers() {
    document.getElementById('registerForm').style.display = 'none';
    document.getElementById('allUsers').style.display = 'block';
}

function submitRegisterForm() {
    // Implement your form submission logic here
    let password1 = document.getElementById("password1").value;
    let password2 = document.getElementById("password2").value;

    if(password1!==pasword2){
    document.getElementById("message").innerHTML = "Passwords do not match.";
    }else {
    
    }
    
}

// function showUsers(){
//  document.querySelector(".showUsers").style.display = "table";
// }

