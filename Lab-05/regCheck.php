<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email= $_POST['email'];
    $_SESSION['name']=$_POST['name'];
    $_SESSION['email']=$_POST['email'];
    
    $_SESSION['date']=$_POST['date'];
    if(isset($_POST['gender']))
    {
        $_SESSION['gender']=$_POST['gender'];
    }

    if($username == "" || $password == "" || $email == ""){
        header('location: registration.php');
    }else{
        $user = ['username'=> $username, 'password'=>$password, 'email'=>$email];
        $_SESSION['user'] = $user;
        header('location: login.php');
    }

?>