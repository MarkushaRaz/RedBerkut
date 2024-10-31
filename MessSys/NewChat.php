<?php
    require 'Backend/Data.php';

    $Data = json_decode(file_get_contents('php://input'), true);

    $Id = $Data['Id'];
    $Name = $Data['Name'];

    $Stat = $Pdo->prepare("SELECT Id FROM main WHERE Id = :Id");
    $Stat->execute(['Id' => $Id]);
    $ReId = $Stat->fetchColumn();

    $Stat = $Pdo->prepare("SELECT Login FROM main WHERE Login = :Login");
    $Stat->execute(['Login' => $Name]);
    $ReName = $Stat->fetchColumn();

    if ($ReId && $ReName) {
        $DBn = "Oppo" . '_' . $ReName;

        $Stat = $Pdo->prepare("CREATE TABLE IF NOT EXISTS `$DBn` (
                `Id` int(6) NOT NULL,
                `Sender` int(6) NOT NULL,
                `Receiver` int(6) NOT NULL,
                `Message` text NOT NULL,
                `Date` timestamp NOT NULL DEFAULT current_timestamp()
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
        ");
        $Stat->execute();

        echo "<div id='PerDialog'><a onclick='CheckChat()'><img src='Photo/Красный Беркут.jpg' class='PerDialog img' width='60px' height='60px'><H3 class='PerDialog'>{$ReName}</H3></a></div>";
    }
    else {
        echo "Ошибка";
    }
?>

<!-- <div id='PerDialog'><a href=""><img src='Photo/Красный Беркут.jpg' class='PerDialog img' width='60px' height='60px'><H3 class='PerDialog'>{$ReName}</H3></a></div> -->