<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liber Primus</title>

    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>

<body>
    <div class="login">
        <div class="left_side">
            <img src="{{url('/images/logo.png')}}" alt="">
            
            <p>Door To Knowledge</p>
            <span>Get your best quality books here!</span>
            <div class="register_account">
                <span>Already have an account? <a href="login">Log In.</a></span>
            </div>
        </div>

        <div class="right_side">
            <form class="form" action="login.html" onsubmit="return validate()">
                <h1>Hello!</h1>
                <span>Create an account to get started  .</span>
                <p class="sub_title">Username</p>
                <input type="text" name="" id="txtUsername" placeholder="  Username">
                <p class="sub_title">Email</p>
                <input type="email" name="" id="txtEmail" placeholder="  Enter Your Email">
                <p class="sub_title">Password</p>
                <input type="password" name="" id="txtPassword" placeholder="  Password">
                <p class="sub_title">Confirm Your Password</p>
                <input type="password" name="" id="txtPassword2" placeholder="  Re-Enter Your Password">

                <div class="login_button">
                    <a href=""><input type="submit" value="Create Account"></a>
                </div>
                
                <p id="error" style="color: red; font-size: 15px"></p>
            </form>
        </div>
    </div>
</body>

<script>
    function showError(msg) {
        let error =  document.getElementById("error")
        error.innerHTML = msg
        return false
    }
    
    function validate() {
        let username = document.getElementById("txtUsername").value
        let email = document.getElementById("txtEmail").value
        let password = document.getElementById("txtPassword").value
        let confirmpassword = document.getElementById("txtPassword2").value
    
        if (username == "") {
            return showError("Username must be filled")
        }
    
        else if (email.indexOf('@') == -1) {
            return showError("Email must contain '@'")
        }
    
        else if (!email.endsWith(".com")) {
            return showError("Email must ends with .com")
        }
    
        else if (password.length < 5 || password.length > 10) {
            return showError("Password must be 5 - 10 characters")
        }
    
        else if (password[0] != password[0].toUpperCase()) {
            return showError("Password must be starts with an uppercase character")
        }
    
        else if (!hasSpecialChar(password)) {
            return showError("Password must contain a special character")
        }
    
        else if(confirmpassword != password){
            return showError("Password is wrong")
        }
    }
    
    
    function hasSpecialChar(str) {
        for (let i = 0; i < str.length; i++) {
    
            if (!((str[i] >= 'a' && str[i] <= 'z') || (str[i] >= 'A' && str[i] <= 'Z') || (str[i] >= '0' && str[i] <= '9'))) {
                return true
            }
        }
        return false
    }
</script>

</html>