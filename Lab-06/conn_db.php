<?php
$name=$_POST['name'];
$buyingprice=$_POST['buying_Price'];
$sellingprice=$_POST['selling_Price'];
$con = mysqli_connect('localhost', 'root', '', 'product_db');

    $sql = "INSERT INTO products VALUES('','{$name}', '{$buyingprice}', '{$sellingprice}');";
    $status = mysqli_query($con, $sql);
    $status = mysqli_query($con, $sql);

    if ($status) {
        header('location: display.php');}

    ?>