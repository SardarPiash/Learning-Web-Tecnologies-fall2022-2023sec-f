<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Picture</title>
</head>
<body>
<img src="company_name.png" width="200" height="150">
    <table align="right"><tr><td>Logged in as<a href="publichome.html">
        <?php 
            session_start();
                echo $_SESSION['name']; ?></a></td>
    <td><a href="logout.php">Logout</a></td>
    
    </tr></table>
    
    <table border="1" width="800">

        <tr>
            <td>
            <h4>Account</h4><br>
                <ul type="radio">
                   <li><a href="dashboard.php">Dashboard</a><br></li> 
                   <li><a href="viewprofile.php">View Profile</a></li>
                   <li><a href="editprofile.php">Edit Profile</a><br></li> 
                    <li><a href="changeppicture.php">Change Profile Picture</a><br></li>
                    <li><a href="changepassword.php">Change Password</a><br></li>
                    <li><a href="logout.php">Log out</a><br></li>
                </ul>

            </td>
        
        
            <td>
                <fieldset>
                    <legend>Profile Picture</legend>
                    <img src="Login.png" width="200" height="150"><br>
                    <input type="file" name="pp"><br>
                    <button type="submit">Submit</button>
                </fieldset>
            </td>
        
        <tr>
            <td colspan="2" align="center">Copyright@2017</td>
        </tr>
    </table>
</body>
</html>