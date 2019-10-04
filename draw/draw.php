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
<form method="post">
    <input type="text" name="width">
    <input type="submit">
    <code>
        <?php
        $countElement2 = 0;
        $draw_1 = "*&nbsp";
        $draw_2 = "&nbsp&nbsp";
        $countElement2 = 0;
        for ($i = 0; $i < $_POST['width']; $i++) {
            array_push($arrNumber, $i);
            $arrNumber[$i] = [];

            for ($j = 0; $j < $_POST['width']; $j++) {
                array_push($arrNumber[$i], $j);
                $arrNumber[$i][$j] = $draw_1;
                if (($i + $j < ($_POST['width'])) || (($i + $j > ($_POST['width']) && $i + $j < (($_POST['width']*2)-1)) && $i != (($_POST['width'])-1) && $j != (($_POST['width'])-1))) {
                    $countElement2 = $j;
                    $arrNumber[$i][$j] = $draw_2;
                }
                echo $arrNumber[$i][$j];

            }
            echo "<br>";
        }
        ?>
    </code>
</form>
</body>
</html>