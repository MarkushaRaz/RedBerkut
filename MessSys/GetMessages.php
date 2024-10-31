<?php
    require 'Backend/Data.php';

    $UserId = $_COOKIE['UserId'];
    $PartnerId = $_GET['dialogId'];

    $Stat = $Pdo->prepare("SELECT sender_id, message FROM messages WHERE (sender_id = :user_id AND receiver_id = :partner_id) OR (sender_id = :partner_id AND receiver_id = :user_id) ORDER BY created_at ASC");
    $Stat->execute(['user_id' => $UserId, 'partner_id' => $PartnerId]);

    $Messages = $Stat->fetchAll();
    foreach ($Messages as $Msg) {
        $Class = ($Msg['sender_id'] == $UserId) ? "SendMess" : "ReceMess";
        echo "<div class='Message $Class'><H3>{$Msg['message']}</H3></div>";
    }
?>