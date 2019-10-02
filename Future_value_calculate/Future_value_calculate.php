<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<table>
    <th colspan="2"><h1>Future Value Calculator</h1></th>
    <tr>
        <td>Investment Amount:</td>
        <td><?php echo "$" . $_POST['amount'] ?></td>
    </tr>
    <tr>
        <td>Yearly Interest Rate:</td>
        <td>
            <?php echo $_POST['interest'] . "%" ?>
        </td>
    </tr>
    <tr>
        <td>
            Number of Years:
        </td>
        <td>
            <?php echo $_POST['year'] ?>
        </td>
    </tr>
    <tr>
        <td>
            Future Value:
        </td>
        <td>
            <?php echo "$" . $_POST['amount'] * pow((1 + $_POST['interest'] / 100), $_POST['year']) ?>
        </td>
    </tr>
</table>
</body>
</html>
