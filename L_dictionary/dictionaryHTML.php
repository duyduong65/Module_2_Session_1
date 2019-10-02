<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }
        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</head>
<body>

<form method="post" action="">
    <table>
        <th><h1>Từ điển Anh-Việt</h1></th>
        <tr>
            <td>
                <input type="text" name="input">
                <input type="submit" id="submit" value="Search">
            </td>
        </tr>
    </table>
</form>
</body>
</html>
<?php include "dictionaryPHP.php"?>