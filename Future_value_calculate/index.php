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
<form action="Future_value_calculate.php" method="post">
    <table >
        <th colspan="2"><h1>Future Value Calculator</h1></th>
        <tr>
            <td>Investment Amount: </td>
            <td><input name="amount" type="text"></td>
        </tr>
        <tr>
            <td>
                Yearly Interest Rate:
            </td>
            <td>
                <input type="text" name="interest">
            </td>
        </tr>
        <tr>
            <td>
                Number of Years:
            </td>
            <td>
                <input type="text" name="year">
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Calculate"></td>
        </tr>
    </table>
</form>
</body>
</html>
