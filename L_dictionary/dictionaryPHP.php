<?php
$dictionary = array("hello" => "xin chào", "how" => "thế nào", "book" => "quyển vở", "computer" => "máy tính");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $searchWord = $_POST['input'];
    $flag = 0;
    foreach ($dictionary as $word => $description){
        if ($word === $searchWord){
            echo "Từ ".$searchWord ." nghĩa là ". $description;
            echo "<br>";
            $flag = 1;
        }
    }
    if ($flag === 0){
        echo "not Found";
    }
}