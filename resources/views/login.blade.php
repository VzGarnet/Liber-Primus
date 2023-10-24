<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liber Primus</title>

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

</head>

<body>
    <div class="login">
        <div class="left_side">
            <img src="{{url('/images/logo.png')}}" alt="">
            
            <p>Door To Knowledge</p>
            <span>Get your best quality books here!</span>
            <div class="register_account">
                <span>No account? <a href="register">Create an Account!</a></span>
            </div>
        </div>

        <div class="right_side">
            <form class="form" action="home" onsubmit="return validate()">
                <h1>Welcome!</h1>
                <span>Sign in to continue.</span>
                <p class="sub_title">Username</p>
                <input type="text" name="" id="txtUsername" placeholder="  Username">
                <p class="sub_title">Password</p>
                <input type="password" name="" id="txtPassword" placeholder="  Password">

                <div class="login_button">
                    <a href=""><input type="submit" value="Sign In"></a>
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
        let password = document.getElementById("txtPassword").value
    
        if (username == "") {
            return showError("Username must be filled")
        }
    
        else if (password.length < 5 || password.length > 10) {
            return showError("Password must be 5 - 10 characters")
        }
    }
</script>

</html>