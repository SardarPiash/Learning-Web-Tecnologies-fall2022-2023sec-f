  
                <?php 
    $username = $_POST['username'];
    $password = $_POST['pass'];

    if($username==""||$password==""|| $username<=2 || $password>=8)
    {
        echo "Invalid";
    }
    else
    {
        echo "Good";
    }
    
?>     
