<?php
$id = $password = "";
$idErr = $passwordErr = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if (empty($_POST['id'])){
        $idErr = "Id is required";
    } else{
        $id = test_input($_POST['id']);
        if (!preg_match("/^[a-zA-Z]*$/", $id)) {
            $idErr = "Only letters allowed";
        }
    }
    if (empty($_POST['password'])){
        $passwordErr = "Password is required";
    }else{
        $password = test_input($_POST['password']);
        if (!preg_match("/^[a-zA-Z0-9]{8}[a-zA-Z0-9]*/", $password)) {
            $passwordErr = "Only letters allowed";
        }
    }
}
if ($id === "admin" && $password ==="admin"){
    echo "Welcome admin";
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
