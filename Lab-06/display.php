<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
</head>
<body>
<form method="POST">
        <fieldset>
            <legend><h1>DISPLAY</h1></legend>
            <table border="1">
                <tr>
                    <th>NAME</th>
                    <th>PROFIT</th>
                </tr>
                <?php
                $con = mysqli_connect('localhost', 'root', '', 'product_db');
                $sql = "SELECT * FROM products";
                $productinfo = mysqli_query($con, $sql);
                $profit=0;
                while ($productinfo = mysqli_fetch_array($productinfo)) {
                    echo "<tr>";
                    echo "<td>{$productinfo[1]}</td>";
                    $profit = $productinfo[3] - $productinfo[2];
                    echo "<td>{$profit}</td>";
                    echo "<td><a href='edit.php?err={$productinfo[1]}'>edit</a></td>";
                    echo "<td><a href='delete.php'>delete</a></td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </fieldset>
    </form>
</body>
</html>