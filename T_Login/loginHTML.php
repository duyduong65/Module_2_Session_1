<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php include "loginPHP.php" ?>
<form method="post" action="">
    <table border="1px">
        <th><h1 style="color: red">Login</h1></th>
        <tr>
            <td style="text-align: right">
                ID: <input name="id" type="text" value="<?php echo $id ?>"><br>
                <span style="color: red" class=" error">* <?php echo $idErr; ?></span>
            </td>
        </tr>
        <tr>
            <td style="text-align: right">
                Password: <input name="password" type="password" value="<?php echo $password ?>"><br>
                <span style="color: red" class=" error">* <?php echo $passwordErr; ?></span>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Login">
            </td>
        </tr>

    </table>
</form>
</body>
</html>