<?php
include conn_db.php;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
    <fieldset>
        <legend>Delete Product</legend>
        <table>
            <tr>
                <th>Name</th>
                <td>
                  <?php  
                           $con = mysqli_connect('localhost', 'root', '', 'product_db');
                           $sql = "SELECT * FROM products where name='{$name}';";
                           $productsInformation = mysqli_query($con, $sql);
                           //$profit=0;
                           for ($i=0;$i<=)
                           while ($productInformation = mysqli_fetch_array($productsInformation)) {
                        
                               echo "{$productInformation[1]}";
                            
                        }
                  ?>
                </td>
            </tr>
        </table>
    </fieldset>
</body>
</html>