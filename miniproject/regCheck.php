<?php
    session_start();
    $id = $_POST['id'];
    $password = $_POST['password'];
    $cpassword= $_POST['cpassword'];
    $name=$_POST['name'];
    $email = $_POST['email'];
    $usertype= $_POST['usertype'];

    // if($username == "" || $password == "" || $email == "" || $cpassword == "" || $id == "" ){
    //     header('location: registration.php');
    // }else{      
        
        $con = mysqli_connect('localhost', 'root', '', 'miniproject');
        $sql = "insert into projrct values( '{$id}','{$username}', '{$password}', '{$email}','{$usertype}')";
        $status = mysqli_query($con, $sql);
        header('location: login.php');
        
    //}

?>