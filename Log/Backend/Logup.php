<?php
    $Login = filter_var(trim($_POST['Login']), FILTER_SANITIZE_STRING);
    $Pass = filter_var(trim($_POST['Pass']), FILTER_SANITIZE_STRING);

    if (mb_strlen($Login) > 12) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }
    else if (mb_strlen($Pass) < 6) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }

    $Pass = md5($Pass);

    $MySQL = new mysqli('localhost', 'root', '', 'redberkut');
    $MySQL->query("INSERT INTO `main` (`Login`, `Pass`) VALUES ('$Login', '$Pass')");
    $MySQL->close();

    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>