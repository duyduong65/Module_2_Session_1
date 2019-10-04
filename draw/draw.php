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
//        $length = $_POST['width'];
        $width = $_POST['width'];
        for ($i = 0; $i < $width; $i++) {
            array_push($arrNumber, $i);
            $arrNumber[$i] = [];
            for ($j = 0; $j < $width; $j++) {
                array_push($arrNumber[$i], $j);
                $arrNumber[$i][$j] = $draw_1;
                if (($i + $j < ($width)) || (($i + $j > ($width) && $i + $j < (($width *2)-1)) && $i != (($width)-1) && $j != (($width)-1))) {
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