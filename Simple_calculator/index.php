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
<form action="simple_calculator.php" method="post">
    <h1>Simple Calculator</h1>
    <fieldset>
        <legend>Calculator</legend>
        <table>
            <tr>
                <td>First Operand:</td>
                <td>
                    <input type="text" name="operand_1">
                </td>
            </tr>
            <tr>
                <td>Operator:</td>
                <td>
                    <select name="operator">
                        <option value="+">Addition</option>
                        <option value="-">Minus</option>
                        <option value="/">Division</option>
                        <option  value="*">Multiply</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Second Operand:
                </td>
                <td>
                    <input type="text" name="operand_2">
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Calculate"></td>
            </tr>
        </table>
    </fieldset>
</form>
</body>
</html>