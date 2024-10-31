<?php
    require 'Data.php';

    $UserId = 2;
    $PartnerId = 1;

    // $Stat = $Pdo->prepare("SELECT username, sender_id, receiver_id, message, created_at FROM messages m JOIN users u ON m.sender_id = u.id WHERE (m.sender_id = :user_id AND m.receiver_id = :partner_id) OR (m.sender_id = :partner_id AND m.receiver_id = :user_id) ORDER BY m.created_at ASC");
    // $Stat->execute(['user_id' => $UserId, 'partner_id' => $PartnerId]);

    // $Messages = $Stat->fetchAll();

    // foreach($Messages as $Ms) {
    //     $Class = ($Ms['sender_id'] == $UserId) ? "SendMess" : "ReceMess";
    //     echo "<div class='Message $Class'><H3>{$Ms['message']}</H3></div>";
    // }
?>