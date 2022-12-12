<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
<form method="post" action="regCheck.php" enctype="">
            <fieldset>
                <legend>Registration</legend>
                Id: <input type="text" name="id" value=""/> <br>
                password: <input type="password" name="password" value=""/> <br>
                Confirm password: <input type="password" name="cpassword" value=""/> <br>
                Name: <input type="text" name="name" value=""/> <br>
                Email: <input type="email" name="email" value=""/> <br>
               User Type <br>
                <select name="usertype"><option>Admin</option><option>User</option></select><br>
                <input type="submit" name="btn" value="Register"/>
                <a href ="login.php">Login</a>
            </fieldset>
        </form>



</body>
</html>