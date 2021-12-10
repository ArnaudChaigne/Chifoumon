<?php
session_start();


if(isset($_POST["submit"])) {
    $_SESSION["username"] = filter_var($_POST["username"], FILTER_SANITIZE_STRING);
    $_SESSION["password"] = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
    $username = $_SESSION["username"];
    $password = $_SESSION["password"];
    if(($username == "arnaud") and ($password == "test"))
    {
        header("location: index2.php");
    } else {
        echo "identifiant ou mot de passe incorrect";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="POST">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password"> 
        <button type="submit" name="submit">Submit</button>
    </form>
</body>

</html>