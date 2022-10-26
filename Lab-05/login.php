
<html>
<head>
    <title>Login</title>
</head>
<body>
<img src="company_name.png" width="200" height="150">
    <table align="right"><tr><td><a href="publichome.html">Home</a></td>
    <td><a href="login.php">Login</a></td>
    <td><a href="registration.php">Registration</a></td>
    </tr></table>
        
        <form method="post" action="loginCheck.php" enctype="">
            <fieldset>
                <legend>Login</legend>
                Username: <input type="text" name="username" value=""/> <br>
                password: <input type="password" name="password" value=""/> <br>
                <input type="checkbox">Remember Me! <br>
                <input type="submit" name="btn" value="Submit"/>
                <a href="forgetpass.php">Forget Password?</a>
                
            </fieldset>
        </form>
</body>
</html>