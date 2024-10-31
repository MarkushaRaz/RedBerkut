<?php
    $Host = 'localhost';
    $User = 'root';
    $Pass = '';
    $Data = 'redberkut';

    try {
        $Pdo = new PDO("mysql:host=$Host;dbname=$Data", $User, $Pass);
        $Pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Ошибка: " . $e->getMessage());
    }
?>