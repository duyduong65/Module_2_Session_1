<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<form action="display_discount.php" method="post">
    <table>
        <th colspan="2" style="text-align: center "><h2>Product Discount Calculator</h2></th>
        <div>
            <tr>
                <td>Product Description:</td>
                <td><?php echo $_POST['description'] ?></td>
            </tr>
            <tr>
                <td>Price:</td>
                <td><?php echo $_POST['price'] ?>$</td>
            </tr>
            <tr>
                <td>Discount Percent:</td>
                <td><?php echo $_POST['percent'] ?></td>
            </tr>
            <tr>
                <td>Discount Amount:</td>
                <td><?php echo $_POST['price'] * $_POST['percent'] / 100 ?>$</td>
            </tr>
            <tr>
                <td>Discount Price:</td>
                <td><?php echo $_POST['price'] - $_POST['price'] * $_POST['percent'] / 100 ?>$</td>
            </tr>
        </div>
    </table>
</form>
</body>
</html>