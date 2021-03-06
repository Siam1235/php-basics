<?php

if (isset($_POST['submit'])) {

    $name = ["Siam Azad", "Sadhin Ahnaf", "Salman Omar", "Tamim Zabir"];


    $minimum = 5;
    $maximum = 14;
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (strlen($username) < $minimum) {
        echo "User Name Should be more than five characters";
    }
    if (strlen($username) > $maximum) {
        echo "username should be below foorteen Charecter";
    }

    if (!in_array($username, $name)) {
        echo "You are Not a user of this website";
    } else {
        echo "<h1>" . "Welocome " . $username . "</h1>";
    }
}




?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
</head>

<body>
    <form action="form.php" method="post">
        <input type="text" name="username">
        <input type="password" name="password">
        <input type="submit" name="submit">
    </form>
</body>

</html>