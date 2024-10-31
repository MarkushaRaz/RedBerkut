<?php
    require 'backend/Data.php';
    require 'Backend/Receive.php';

    header("Content-Type:application/json");

    $Stat = $Pdo->query("SELECT Sender, Receiver, Message, Date FROM oppo_дмитрий m JOIN main u ON m.Sender = u.Id WHERE (m.Sender = :User AND m.Receiver = :Partner) OR (m.Sender = :Partner AND m.Receiver = :User) ORDER BY m.Date ASC;");
    $Stat->execute(['User' => $UserId, 'Partner' => $PartnerId]);

    $Data = $Stat->fetchAll(PDO::FETCH_ASSOC);
        
    if ($Data) {
        echo json_encode($Data);
    }
    else {
        echo json_encode(["message" => "Нет данных"]);
    }
?>