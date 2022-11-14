<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <form action="conn_db.php" method="POST">
    <fieldset>
        <legend>Edit Product</legend>
        <table>
            <tr><td>
                Name <br></td></tr>
                <tr><td><input type="text" name="name" value=""></td></tr>
                <tr><td>Buying Price </td></tr>
                <tr><td><input type="number" name="buying_Price" value=""></td></tr>
                <tr><td> Selling Price </td></tr>
                <tr><td><input type="text" name="selling_Price" value=""></td></tr>
                <tr><td><hr><input type="checkbox" name="display">display <hr>
                <button type="submit">Save</button>
        </table>
    </fieldset>
    </form>
</body>
</html>