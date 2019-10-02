<?php
$customer = [
    "1" => ["ten" => "Mai Văn Hoàn",
        "ngaysinh" => "1983-08-20",
        "diachi" => "Hà Nội",
        "anh" => "images/img1.png"],
    "2" => ["ten" => "Nguyễn Văn Nam",
        "ngaysinh" => "1983-08-20",
        "diachi" => "Bắc Giang",
        "anh" => "images/img2.png"],
    "3" => ["ten" => "Nguyễn Thái Hòa",
        "ngaysinh" => "1983-08-21",
        "diachi" => "Nam Định",
        "anh" => "images/img3.png"],
    "4" => ["ten" => "Trần Đăng Khoa",
        "ngaysinh" => "1983-08-22",
        "diachi" => "Hà Tây",
        "anh" => "images/img4.png"],
    "5" => ["ten" => "Nguyễn Đình Thi",
        "ngaysinh" => "1983-08-17",
        "diachi" => "Hà Nội",
        "anh" => "images/img5.png"]
];

foreach ($customer as $key => $values) {
    echo "<tr>";
    echo "<td>".$key."</td>";
    echo "<td>" . $values["ten"] . "</td>";
    echo "<td>" . $values['ngaysinh'] . "</td>";
    echo "<td>" . $values['diachi'] . "</td>";
    echo "<td><img src='" . $values['anh'] . "' width='80 px' height='80 px'></td>";
}
