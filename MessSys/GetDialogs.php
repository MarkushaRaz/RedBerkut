<?php
    require 'Backend/Data.php';
    
    $Stat = $Pdo->query("SELECT Id, Login FROM `main` WHERE Id != {$_COOKIE['User']}");

    while ($Row = $Stat->fetch()) {
        echo "<div class='PerDialog' data-id='{$Row['Id']}'>
                <img src='Photo/Красный Беркут.jpg' class='img' width='60px' height='60px'>
                <H3 class='PerDialog'>{$Row['Login']}</H3>
            </div>";
    }
?>