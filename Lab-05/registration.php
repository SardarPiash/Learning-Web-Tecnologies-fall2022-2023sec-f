
<html>
<head>
    <title>Registration</title>
</head>
<body>

<img src="company_name.png" width="200" height="150">
    <table align="right"><tr><td><a href="publichome.html">Home</a></td>
    <td><a href="login.php">Login</a></td>
    <td><a href="registration.php">Registration</a></td>
    </tr></table>
        <form method="post" action="regCheck.php" enctype="">
        <fieldset>
                    <legend>Registration</legend>
            <table>
                <tr><td>Name: <input type="text" name="name" value="" placeholder="Enter User Name">
                 </td></tr>
                <tr><td>Email : <input type="email" name="email" value="" placeholder=""></td></tr>
                <tr><td>User Name: <input type="text" name="username" value="" placeholder="Enter User Name"></td></tr>
                <tr><td>Password : <input type="password" name="password" value="" placeholder="Enter Password"></td></tr>
                <tr><td>Confirm Password : <input type="password" name="password" value="" placeholder="Enter Password Again"></td></tr>
                <tr><td> <fieldset>
                    <legend>Gernder</legend>
                    <input type="radio" name="gender" value="Male">Male
                    <input type="radio" name="gender" value="Female">Female
                    <input type="radio" name="gender" value="Other">Other <br>    
                    
                </fieldset></td></tr>
                <tr><td><fieldset>
                    <legend>Date of Birth</legend>
                        <input type="date" name="date" value="" ><br>
                        
                </fieldset> </td></tr>
                <tr><td><button type="submit">Submit</button><input type="reset" name="" value="Reset"/></td></tr>
                <tr><td>
                <fieldset>
            <p align="center">Copyright @2017</p>
            </fieldset> 
                </td></tr>   
            </fieldset>
            
            </table>
        </form>
        
</body>
</html>