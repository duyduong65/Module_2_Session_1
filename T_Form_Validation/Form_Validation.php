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
<h2>PHP Form Validation Example</h2>
<?php
$nameErr = $emailErr = $websiteErr = $commentErr = $genderErr = "";
$name = $email = $website = $comment = $gender = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['name'])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST['name']);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST['email'])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST['gender'])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST['gender']);
    }

    if (empty($_POST['website'])) {
        $websiteErr = "";
    } else {
        $website = test_input($_POST['website']);
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
            $websiteErr = "Invalid URL";
        }
    }

    if (empty($_POST['comment'])) {
        $commentErr = "";
    } else {
        $comment = test_input($_POST['comment']);
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
    <table>
        <tr>
            <td>
                Name: <input name="name" type="text" value="<?php echo $name; ?>">
                <span class="error">* <?php echo $nameErr; ?></span>
            </td>
        </tr>
        <tr>
            <td>
                E-Mail: <input name="email" type="text" value="<?php echo $email; ?>">
                <span class=" error">* <?php echo $emailErr; ?></span>
            </td>
        </tr>
        <tr>
            <td>
                Website: <input name="website" type="text" value="<?php echo $website;?>">
                <span class=" error"> <?php echo $websiteErr; ?></span>
            </td>
        </tr>
        <tr>
            <td>
                Comment: <textarea name="comment" rows="5" cols="40" value="<?php echo $comment;?>"></textarea>
                <span class=" error"> <?php echo $commentErr; ?></span>
            </td>
        </tr>
        <tr>
            <td>
                Gender: <input name="gender" type="radio"
                    <?php if (isset($gender) && $gender == "Male") echo "Checked"; ?> value="Male">Male
                <input name="gender" type="radio"
                       <?php if (isset($gender) && $gender == "Female") echo "Checked"; ?> value="Female">Female
                <span class="error">* <?php echo $genderErr; ?></span>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submit" value="submit">
            </td>
        </tr>
    </table>
</form>
</body>
</html>