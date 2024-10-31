<?php
    $Login = filter_var(trim($_POST['Login']), FILTER_SANITIZE_STRING);
    $Pass = filter_var(trim($_POST['Pass']), FILTER_SANITIZE_STRING);

    $Pass = md5($Pass);

    $MySQL = new mysqli('localhost', 'root', '', 'redberkut');
    $Result = $MySQL->query("SELECT * FROM `main` WHERE `Login` = '$Login' AND `Pass` = '$Pass';");
    $User = $Result->fetch_assoc();

    echo $User;

    if (count($User) == 0) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    else {
        setcookie('User', $User['Login'], time() + 86400, "/");

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
?>